// ปิดการนำทางไปข้างหน้า
window.history.pushState(null, '', window.location.href);
window.onpopstate = function () {
    window.history.pushState(null, '', window.location.href);
};


// // การเก็บข้อมูล
// sessionStorage.setItem('username', 'user_name');
// sessionStorage.setItem('password', 'user_password');

// // การดึงข้อมูล
// const username = sessionStorage.getItem('username');
// const password = sessionStorage.getItem('password');

// console.log(username);  // user123
// console.log(password);  // pass123

// // การลบข้อมูล
// sessionStorage.removeItem('username');
// sessionStorage.removeItem('password');



// การเก็บข้อมูล
document.cookie = "username=user_name; path=/; max-age=30";  // หมดอายุใน 30 วิ
document.cookie = "password=user_password; path=/; max-age=30";  // หมดอายุใน 30 วิ

// การดึงข้อมูล
function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([.$?*|{}()[]\+\^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}

const username = getCookie('username');
const password = getCookie('password');

console.log(username);  // user123
console.log(password);  // pass123

// การลบข้อมูล
document.cookie = "username=user_name; path=/; max-age=-1";
document.cookie = "password=user_password; path=/; max-age=-1";
