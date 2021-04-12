<?php
function btnClick($href,$name,$content){
  return ' <form action="./Apublic/process/Pmenu.php"  class="main_checklist_buttons" method="POST">
    <div class="box">
        <a href="'.$href.'" class="dash"><button class="box_btn"  name="'.$name.'"  >'.$content.'</button></a>
    </div>
  </form>';
};

function listMaker($href,$content){
return '<li><a class="dash" href="'.$href.'">'.$content.'</a></li>';
};

function menuAdder($src,$title,$price){

  echo '
  <div class="wrapper_">
      <img src="./Apublic/images'.$src.'"
    <div class="wrapper_inf">
      <h2>'.$title.'</h2>
      <p>'.$price.'</p>
    </div>
  </div>
';
};