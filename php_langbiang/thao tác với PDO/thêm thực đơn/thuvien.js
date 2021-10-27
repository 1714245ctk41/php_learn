function kiem_tra_thuc_don(){
  var ten_thuc_don= document.getElementById('th_ten_thuc_don');
  if (ten_thuc_don.value == '') {
    alert("Nhập tên thực đơn");
    return false;
  }
  return true;
}