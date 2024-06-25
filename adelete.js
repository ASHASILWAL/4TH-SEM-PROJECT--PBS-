
function ConfirmDelete()
{
  var y = confirma("Are you sure you want to delete?");
  if (y)
      return true;
  else
    return false;
}