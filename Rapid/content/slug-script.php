<?php
$ID=$_GET['ID'];
$blog = dbFetch(dbQuery("SELECT * FROM blog where Blog_ID='$ID'"));
?>
<script>
document.title="<?php echo $blog['Title'] ?>";
document.getElementsByTagName("meta")[2].setAttribute("content", "<?php echo $blog['Meta_Keywords'] ?>");
document.getElementsByTagName("meta")[3].setAttribute("content", "<?php echo $blog['Meta_Description'] ?>");
</script>