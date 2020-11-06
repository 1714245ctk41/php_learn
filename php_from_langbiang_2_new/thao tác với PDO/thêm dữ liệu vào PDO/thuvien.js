function kiem_tra_mon_an(){
  var ten = document.getElementById('th_ten_mon');
  if(ten_mon.value == ''){
    alert('Nhập tên món ăn');
    ten_mon.focus();
    return false;
  }
  return true;
}