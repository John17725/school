<style>
    header{
        padding-top: -40px;
        margin-bottom: 10px;
    }
    h1{
        text-align: left;
        font-size: 15px;
    }
    .body-pdf{
        margin-left: 50px;
        margin-right: 50px;
    }

    /* TABLA GENERAL DE INGRESOS */
    .table-container-main{
        width: 480px;
        height: 20px;
        margin-left: 13px;
        /* background:red; */
        font-size: 14px;
    }
    .table-container-main table{
        color: #b87800;
        background: #fff1d4;
        border: 1px solid #b87800;
        border-collapse: collapse;
    }


    .table-container-main .title-table{
        width: 450px;
        /* border: 1px solid black; */
        text-align: left;
    }
    .table-container-main .count-table{
        /* font-size: 10px; */
        width: 100px;
        /* border: 1px solid black; */
    }
    .table-container-main .mount-table{
        /* font-size: 10px; */
        width: 80px;
        border: 1px solid #b87800;
    }
    /*  */

    /* TABLA SECUNDARIA DE INGRESOS POR TABLA */
    .table-container{
        width: 608px;
        margin: 20px 0;
        margin-left: 13px;
        /* background:red; */
    }
    .table-container table{
        font-size: 10px;
        color: #b87800;
        background: #fff1d4;
        border: 1px solid #b87800;
        border-collapse: collapse;
    }

    .table-container .title-table{
        width: 550px;
        /* border: 1px solid black; */
        text-align: left;
    }
    .table-container .count-table{
        /* font-size: 10px; */
        width: 60px;
        /* border: 1px solid black; */
    }
    .table-container .mount-table{
        /* font-size: 10px; */
        width: 87px;
        border: 1px solid #b87800;
    }
    /*  */


    .reports {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
      font-size: 14px;
    }
    .reports td, .reports th {
      border: 1px solid #131313;
      padding: 3px;
      font-size: 14px;
    }
    .reports tr:nth-child(even){background-color: #f2f2f2;}
    .reports tr:hover {background-color: #131313;}
    .reports th {
      text-align: center;
      background-color: #a5a5a5;
      color: #000000;
      font-size: 14px;
    }
    .reports tr th{
        text-align: center;
        font-size: 14px;
        font-weight: 300;
    }
    .reports .col_1{
        width: 10px;
    }
    .reports .col_2{
        width: 250px;
    }
    .reports .col_3{
        width: 250px;
    }
    .reports .col_4{
        width: 80px;
    }
    .reports .col_5{
        width: 60px;
    }
    .reports .col_6{
        width: 90px;
    }
    .reports .col_7{
        width: 90px;
    }

    .header-title{
        width:400px;
        height:200px;
        margin-left: 0;
    }

    .header-logo{
        margin-left: 600px;
        margin-top: -200px;
        margin-bottom: -20px;
        width:85px;
        height:85px;
    }

    .container .footer-text{
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
        font-weight: 300;
        text-align: center;
    }
    .footer-text span{
        /* font-weight: bold; */
    }

    </style>
<html>
    <div class="body-pdf">
        <div >
            <h1>Reporte/Observaciones del alumno(a): {{$alumno->Nombre}}  {{$alumno->Apellidos}} del {{$alumno->Grado}}-{{$alumno->Grupo}}</h1>
        </div>
        <div >
            <h1>Reporte realizado por el Profesor: {{$reporte->nombre_profesor}} de la materia: @if($reporte->materia == null) Sin materia asignada @else{{$reporte->materia}}@endif</h1>
        </div>
        <table class="reports">
            <caption>Reporte realizado {{ \Carbon\Carbon::parse($reporte->created_at)->isoFormat('D \d\e MMMM \d\e\l Y') }} </caption>
            <tr>
              <th class="col_1">Detalles del reporte</th>
            </tr>
            <tr>
                <td style="text-align: justify;">{{$reporte->observaciones}}</td>
            </tr>
        </table>
    </div>
</html>
