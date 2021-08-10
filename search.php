<?php 

$query = $_POST['query'];

if (strpos($query, 'image' /* || 'png' || 'pic'|| 'jpg'*/ )  == true ) {
  header('Location:https://www.google.com/search?tbm=isch&q=' . $query );
}

elseif (strpos($query, 'png' /* || 'png' || 'pic'|| 'jpg'*/ )  == true ) {
  header('Location:https://www.google.com/search?tbm=isch&q=' . $query );
}

elseif (strpos($query, 'pic' /* || 'png' || 'pic'|| 'jpg'*/ )  == true ) {
  header('Location:https://www.google.com/search?tbm=isch&q=' . $query );
}

elseif (strpos($query, 'gif' /* || 'png' || 'pic'|| 'jpg'*/ )  == true ) {
  header('Location:https://www.google.com/search?tbm=isch&q=' . $query );
}

elseif (strpos($query, 'jpg' /* || 'png' || 'pic'|| 'jpg'*/ )  == true ) {
  header('Location:https://www.google.com/search?tbm=isch&q=' . $query );
}
elseif (strpos($query, 'picture' /* || 'png' || 'pic'|| 'jpg'*/ )  == true ) {
  header('Location:https://www.google.com/search?tbm=isch&q=' . $query );
}
elseif (strpos($query, 'logo' /* || 'png' || 'pic'|| 'jpg'*/ )  == true ) {
  header('Location:https://www.google.com/search?tbm=isch&q=' . $query );
}



else {
header('Location: https://www.google.com/search?query=' . $query );
}
?>