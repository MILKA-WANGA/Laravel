<h3>Upload File</h3>
<form action="uploadFile" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" id="file" ><br><br>
    <button type="submit">Upload</button>

</form>