

<style>
   
.body {
   
    font-size: 30pt;
    background-color: rgb(42, 85, 179);
    margin: 0;
    height: 90%;
    border: 10px #3b464c;
   
}
h1 {
    font-size: 60pt;
    color: black;
    text-align: center;
    padding: 18px 0 18px 0;
    margin: 0 0 10px 0;
}
h1 span {
    border: 4px dashed #20bcd5;
    padding: 10px;
}
p {
    padding: 0;
    margin: 0;
}
.img-circle {
    border: 3px solid white;
    border-radius: 50%;
}
.section {
    
    padding: 15px;
    margin-bottom: 10px;
    border-radius: 10px;
    border: 10px #3b464c;
}

.quote {
    font-size: 12pt;
    text-align: right;
    margin-top: 10px;
}
table {
    width: 100%;
    font-size: 15pt;

}
table, th, td {
    
    border-collapse: collapse;
    height: 50px;
    text-align: center;
    table-layout: fixed;
}
.selected {
    background-color: #f36f48;
    font-weight: bold;
    color: white;
}
li {
    margin-bottom: 15px;
    font-weight: bold;
}


hr {
    border: 0;
    height: 1px;
    background: #f36f48;
}
form {
    text-align: center;
    margin-top: 0;
}


.submit {
    background-color: #3fb6b2;
    padding: 12px 45px;
    border-radius: 5px;
    cursor: pointer;
    color: #ffffff;
    border: none;
    outline: none;
    margin: 0;
    font-weight: bold;
}
.submit:hover {
    background-color: #43a09d;
}
textarea {
    height: 100px;
}
input, textarea {
    margin-bottom: 10px;
    font-size: 11pt;
    padding: 15px 10px 10px;
    border: 1px solid #cecece;
    background-color: #efefef;
    color: #787575;
    border-radius: 5px;
    width: 70%;
    outline: none;
}
.face {
    transform: scale(0.4);
    margin: 0 auto;
    display: block;
    margin-top: -35px;
    margin-bottom: -25px;
}
#contacts img {
    height: 50px;
    width: 50px;
    margin-left: 7px;
    margin-right: 7px;
}


    </style>
















    <div class="body">

<?php if(IsUserLoggedIn()):?>

<?php if($_SESSION['teacher'] == 1):?>

        
        
        <table border="1">
                    <thead>
                        <tr>
                            <th><h2>Válassza ki melyik tanegységből szeretne kérdés sort létrehozni</h2></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><h2><a href="<?=ADMIN_BASE_URL?>/?M=tanar&A=matek">Matek</a></h2></td>
                        </tr>
                        <tr>
                            <td><h2><a href="<?=ADMIN_BASE_URL?>/?M=tanar&A=angol">Angol</a></h2></td>
                        </tr>
                        <tr>
                            <td><h2><a href="<?=ADMIN_BASE_URL?>/?M=tanar&A=alapprogramozas">Alap Programozás</a></h2></td>
                        </tr>
                        <tr>
                            <td><h2><a href="<?=ADMIN_BASE_URL?>/?M=tanar&A=list">Feladatok listázása</a></h2></td>
                        </tr>
                       
                    </tbody>
                </table>

           




      <?php endif; ?>



<?php if($_SESSION['teacher'] == 0):?>
<table border="1">
                    <thead>
                        <tr>
                            <th><h2>Válassza ki melyik tanegységből szeretne kérdés megoldani</h2></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><h2><a href="<?=ADMIN_BASE_URL?>/?M=diak&A=matek">Matek</a></h2></td>
                        </tr>
                        <tr>
                            <td><h2><a href="<?=ADMIN_BASE_URL?>/?M=diak&A=angol">Angol</a></h2></td>
                        </tr>
                        <tr>
                            <td><h2><a href="<?=ADMIN_BASE_URL?>/?M=diak&A=alapprogramozas">Alap Programozás</a></h2></td>
                        </tr>
                        <tr>
                            <td><h2><a href="<?=ADMIN_BASE_URL?>/?M=diak&A=list">Feladatok listázása</a></h2></td>
                        </tr>
                       
                    </tbody>
                </table>




      <?php endif; ?>

<?php endif; ?>



    </div>