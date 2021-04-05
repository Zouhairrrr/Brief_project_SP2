<?php
function btnClick($href,$name,$content){
  return ' <form action="./Apublic/process/Pmenu.php"  class="main_checklist_buttons" method="POST">
    <div class="box">
        <a href="'.$href.'"><button class="box_btn"  name="'.$name.'"  >'.$content.'</button></a>
    </div>
  </form>';
};

function listMaker($href,$content){
return '<li><a href="'.$href.'">'.$content.'</a></li>';
};











// function menuAdder($title,$src,$price){

//   return '<div class="container_card">

//   <h1>> '.$title.'</h1>
//   <div class="imgwraper">
//       <img src="../images'.$src.'" style="width: 150px;" alt="logo">
//   </div>
//   <p>'.$price.'</p>
// </div>
// ';
// };