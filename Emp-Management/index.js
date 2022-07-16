function SaveData(){
alert('Employee data is added Successfully');

}

function ValidateDelete(){
return confirm('Confirm to delete');

}


document.getElementsByName("AddNewEmployee").addEventListener("click", redirect);
function redirect()
{
    document.location.href='form.php';
}