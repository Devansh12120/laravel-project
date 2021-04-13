<h1>upload file</h1>
<form action="fileupload" method="post" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<input type="file" name="file">
<br><br>
<button type="submit">Upload file</button>
</form><?php /**PATH G:\laravelproject\resources\views/fileupload.blade.php ENDPATH**/ ?>