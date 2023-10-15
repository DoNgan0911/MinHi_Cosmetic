$(document).ready(function() {
    // Bắt sự kiện click vào biểu tượng mắt
    $('#eye').click(function() {
        // Lấy thẻ input có class "formDN_pass"
        var passwordField = $('.formDN_pass');

        // Lấy thẻ biểu tượng mắt
        var eyeIcon = $(this).children('i');

        // Kiểm tra kiểu dữ liệu hiện tại của input
        if (passwordField.attr('type') === 'password') {
            // Nếu là kiểu password, chuyển sang kiểu text
            passwordField.attr('type', 'text');
            // Thay đổi biểu tượng mắt thành biểu tượng mở mắt
            eyeIcon.removeClass('fa-eye');
            eyeIcon.addClass('fa-eye-slash');
        } else {
            // Nếu là kiểu text, chuyển lại kiểu password
            passwordField.attr('type', 'password');
            // Thay đổi biểu tượng mắt thành biểu tượng đóng mắt
            eyeIcon.removeClass('fa-eye-slash');
            eyeIcon.addClass('fa-eye');
        }
    });
});
//------------------------
var tb_err = document.querySelector(".btn_err");
var email = document.querySelector(".formDN_user");
var pass = document.getElementById("formDN_pass"); // Loại bỏ dấu chấm trước ID
var btn_dn = document.querySelector(".btn_dn"); // Loại bỏ dấu chấm trước ID

btn_dn.addEventListener("click", function(){
    console.log("Ten TK: " + email.value); // Sử dụng .value để lấy giá trị từ ô nhập liệu
    console.log("Pass: " + pass.value); // Sử dụng .value để lấy giá trị từ ô nhập liệu
});