<?php
include("header.php");
if(isset($_POST["saveBlog"])){
    $title = $_POST["title"];
    $date = date("d/m/y");
    
    // Image Upload
    if(isset($_FILES['billede'])){
        $errors= array();
        $file_name = date("dmy") . "-" . $_FILES['billede']['name'];
        $file_size =$_FILES['billede']['size'];
        $file_tmp =$_FILES['billede']['tmp_name'];
        $file_type=$_FILES['billede']['type'];
        $file_ext=strtolower(end(explode('.',$_FILES['billede']['name'])));

        $expensions= array("jpeg","JPEG","jpg","JPG","png","PNG","gif","GIF");

        if(in_array($file_ext,$expensions)=== false){
            $errors[]="Extension not allowed. Please choose a JPEG or PNG file.";
        }

        if(empty($errors)==true){
            move_uploaded_file($file_tmp,"../img/blog/".$file_name);
        } else {
            print_r($errors);
        }
    }
    
    $post = $_POST["post"];
    mysqli_query($link, "INSERT INTO blog (title, date, post, imgUrl) VALUES ('" . $title . "', '" . $date . "', '" . $post . "', '" . $file_name . "')");
    header("Location: index.php");
}
?>
<script>
tinymce.init({
  selector: 'textarea',
  height: 500,
  theme: 'modern',
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools codesample'
  ],
  toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  toolbar2: 'print preview media | forecolor backcolor emoticons',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });
</script>
<h1>New Blog Post</h1>
<div class="adminContent">
    <form action="?gem=1" method="POST" enctype="multipart/form-data">
        <input class="inputText" type="text" name="title" placeholder="Blog Title" required>
        <input class="inputText" type="file" name="billede">
        <textarea name="post" placeholder="Blog Post Content.."></textarea><br>
        <input class="inputButton save" type="submit" name="saveBlog" value="Save">
    </form>
</div>
<?php
include("footer.php");
?>