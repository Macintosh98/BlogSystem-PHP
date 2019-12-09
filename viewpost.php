<?php
session_start();
  require "Rapid/required/settings.php";
  require "Rapid/required/database.php";
?>
<main class="app-content">
  <div class="app-title">
    <div class="row">
      <div class="col-md-2">
      <input class="form-control" id="fromDate" type="text" placeholder="Start Date">
      </div>
      <div class="col-md-2">
      <input class="form-control" id="toDate" type="text" placeholder="End Date">
      </div>
      <div class="col-md-2">
        <select class="form-control selectbox" id="SelectCatagory" >
          <optgroup label="Select Catagory">
            <option selected>Select Catagory</option>
            <?php
            $results = dbQuery("SELECT * FROM blog_category");
                foreach ($results as $category) { ?>
                    <option value="<?php echo $category['ID']; ?>"><?php echo $category['name']; ?></option>
                <?php }
            ?>
          </optgroup>
        </select>
      </div>
      <div class="col-md-2">
        <select class="form-control selectbox" id="SelectDomain" >
          <optgroup label="Select Domain">
            <option selected>Select Domain</option>
            <?php
                $results = dbQuery("SELECT * FROM blog_domain where Status='1'");
                foreach ($results as $domain) { ?>
                    <option value="<?php echo $domain['ID']; ?>"><?php echo $domain['Domain_Name']; ?></option>
                <?php } 
            ?>
          </optgroup>
        </select>
      </div>
      <div class="col-md-2">
        <select class="form-control selectbox" id="SelectPublisher" >
          <optgroup label="Select Publisher">
              <option selected>Select Publisher</option>
              <?php
                  $results = dbQuery("SELECT username FROM blog_admin");
                  foreach ($results as $publishar) { ?>
                      <option value="<?php echo $publishar['username']; ?>"><?php echo $publishar['username']; ?></option>
                  <?php } 
              ?>
          </optgroup>
        </select>
      </div>
      <div class="col-md-2">
        <select class="form-control selectbox" id="SelectPStatus" >
          <optgroup label="Select Cities">
            <option selected>Publish Status</option>
            <option value="0">Pending</option>
            <option value="1">Published</option>
            <option value="2">Deleted</option>
          </optgroup>
        </select>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body table-responsive">
          <table class="table table-hover table-bordered" id="table">
            <thead>
              <tr>
                <th>Blog_ID</th>
                <th>Domain_ID</th>
                <th>Category</th>
                <th>Page_Name</th>
                <th>Title</th>
                <th>Publisher</th>
                <th>Date</th>
                <th>Action</th>
              </tr>
            </thead>
              <tbody id="emp_body">

            </tbody>
          </table>
          <div id="pager">
		<ul id="pagination" class="pagination-sm"></ul>
	</div>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="row">
    <div class="col-md-12">
        <iframe src="Rapid/index.php" style="height:-webkit-fill-available; width:-webkit-fill-available; border:none;"></iframe>
    </div>
  </div> -->
</main>
</div>


<script>
  $(document).ready(function(){
    $('.selectbox').select2(); 
    var SelectCatagory="Category='Select Catagory'";
    var SelectDomain="Domain_ID='Select Domain'";
    var SelectPublisher="Publisher='Select Publisher'";
    var SelectPStatus="Publish_Status='Publish Status'";
    var fromDate="";
    var toDate="";
    var filtertable="";
    applyfilter();
    var $pagination = $('#pagination'),
      totalRecords = 0,
      records = [],
      displayRecords = [],
      recPerPage = 50,
      page = 1,
      totalPages = 0;


    $('#fromDate').datepicker({
      format: "yyyy-mm-dd",
      autoclose: true,
      todayHighlight: true
    });

    $('#toDate').datepicker({
      format: "yyyy-mm-dd",
      autoclose: true,
      todayHighlight: true,
    })
    .on('changeDate', function(e) {
        fromDate=$('#fromDate').val();
        toDate=$('#toDate').val();
        applyfilter();
    });

    
    $(document).on('change', '#SelectCatagory', function () {
        SelectCatagory="Category='"+ $('#SelectCatagory').val()+"'";
        applyfilter();
    });
    
    $(document).on('change', '#SelectDomain', function () {
        SelectDomain="Domain_ID='"+ $('#SelectDomain').val()+"'";
        applyfilter();
    });

    $(document).on('change', '#SelectPublisher', function () {
        SelectPublisher="Publisher='"+ $('#SelectPublisher').val()+"'";
        applyfilter();
    });

    $(document).on('change', '#SelectPStatus', function () {
        SelectPStatus="Publish_Status='"+	$('#SelectPStatus').val()+"'";
        applyfilter();
    });
      
            
    function applyfilter(){
      if(SelectCatagory!="Category='Select Catagory'")
      {
        filtertable=SelectCatagory;
      }
      if(SelectDomain!="Domain_ID='Select Domain'")
      {
        if(filtertable!="") filtertable+="and ";
        filtertable+=SelectDomain;
      }
      if(SelectPublisher!="Publisher='Select Publisher'") 
      {
        if(filtertable!="") filtertable+="and ";
        filtertable+=SelectPublisher;
      }
      if(SelectPStatus!="Publish_Status='Publish Status'")
      {
        if(filtertable!="") filtertable+="and ";
        filtertable+=SelectPStatus;
      }
      if((fromDate!="") && (toDate!=""))
      {
        if(filtertable!="") filtertable+="and ";
        filtertable+="Date between '"+fromDate+"' and '"+toDate+"'";
      }
      $.ajax({
      type: "POST",
      url: "content_save.php",
      data: {
        from:'viewpost_page',
        filtertable:filtertable
      },
      dataType: 'json',
        success: function (data) {
          records = data;
          totalRecords = records.length;
          
          totalPages = Math.ceil(totalRecords / recPerPage);
          $pagination.twbsPagination({
            totalPages: totalPages,
            initiateStartPageClick: true,
            visiblePages: 6,
          });
          displayRecordsIndex = Math.max(totalPages - 1, 0) * recPerPage;
          endRec = (displayRecordsIndex) + recPerPage;
          displayRecords = records.slice(displayRecordsIndex, endRec);
          generate_table();
        }
      });
    filtertable="";
    }


    function generate_table() {
      var access="<?php echo $_SESSION['access_control'];?>";
      var tr;
      $('#emp_body').html('');
      for (var i = 0; i < displayRecords.length; i++) {
        var domain={<?php $results1 = dbQuery("SELECT * FROM blog_domain");
          foreach ($results1 as $domain) {
            echo $domain['ID'];?>:"<?php echo $domain['Domain_Name'];?>",<?php
        }?>}; 
        var catagory={<?php $results3 = dbQuery("SELECT * FROM blog_category");
          foreach ($results3 as $category) {
            echo $category['ID'];?>:"<?php echo $category['name'];?>",<?php
        }?>};
      
        tr = $('<tr id='+ displayRecords[i].Blog_ID +'/>');
        tr.append("<td>" + displayRecords[i].Blog_ID + "</td>");
        tr.append("<td>" + domain[displayRecords[i].Domain_ID] + "</td>");
        tr.append("<td>" + catagory[displayRecords[i].Category] + "</td>");
        tr.append("<td>" + displayRecords[i].Page_Name + "</td>");
        tr.append("<td>" + displayRecords[i].Title + "</td>");
        tr.append("<td>" + displayRecords[i].Publisher + "</td>");
        tr.append("<td>" + displayRecords[i].Date + "</td>");
  
        if((access=='superadmin') || (access=='admin')) {
          tr.append(`<td>
            <button class="btn btn-warning" id="edit_content" data-id=` + displayRecords[i].Blog_ID + `>Edit</button>
            <button class="btn btn-primary" id="view" data-toggle="modal" data-target="#myModal2" data-id=` + displayRecords[i].Blog_ID + `>View</button>   
            <button class="btn btn-success" id="publish" data-id=` + displayRecords[i].Blog_ID + `>Publish</button>
            <button class="btn btn-danger" id="delete" data-id=` + displayRecords[i].Blog_ID + `>Delete</button>
          </td>`);
        }else {
          tr.append(`<td>
            <button class="btn btn-warning" id="edit_content" data-id=` + displayRecords[i].Blog_ID + `>Edit</button>
            <button class="btn btn-primary" id="view" data-toggle="modal" data-target="#myModal2" data-id=` + displayRecords[i].Blog_ID + `>View</button>
          </td>`);
        }
        $('#emp_body').append(tr);
      }
    }
    
  });
</script>
