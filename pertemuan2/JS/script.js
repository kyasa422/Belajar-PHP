// let keyword = document.getElementById('keyword');
// let tombolcari=document.getElementById('tombol-cari');
// let container=document.getElementById('container');


// keyword.addEventListener('keyup', function(){
    
//     // membuat Objek ajax
//     let xhr =new XMLHttpRequest();

//     // cek kesiapan ajax
//     xhr.onreadystatechange=function(){
//         if(xhr.readyState == 4 && xhr.status == 200 ) {
//             container.innerHTML = xhr.responseText;
//         }
//     }

//     xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value , true);
//     xhr.send();


// })

$(document).ready(function(){

    //Even ketika keyword ditulis
    $('#keyword').on('keyup',function(){
        $('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());
    });
});