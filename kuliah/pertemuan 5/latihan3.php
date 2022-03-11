<?php
// representasi data mahasiswa

$mahasiswa = [
    ["ahmad saeful rahman","21304145","ahmadsaepul208@gmail.com","teknik informatika"],
];
[" hilal","213040","@mgail.com","teknik Infomatika"]
[" wildan","213040","@mgail.com","teknik Infomatika"]
[" julped","213040","@mgail.com","teknik Infomatika"]
[" hansen","213040","@mgail.com","teknik Infomatika"]
[" yogi","213040","@mgail.com","teknik Infomatika"]

];

?>
<?php foreach($mahsiswa as $ mhs) [?>]
<ul>
    <li>nama : <?php echo  $mhs[0]; ?></li>
        <li>NPM : <?php echo $mhs [2]?></li>
            <li> email : ahmadsaepul208@gmail.com</li>
                <li> jurusan : teknik infomatika </li>
</ul>