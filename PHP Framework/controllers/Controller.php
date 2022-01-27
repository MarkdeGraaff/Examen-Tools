
<?php
Class Controller  {
  public static function CreateView($viewName, $filetype) {
      require_once("./views/$viewName.$filetype");
  }
}

 ?>
