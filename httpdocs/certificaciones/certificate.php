<?php
	date_default_timezone_set('America/Mexico_City');
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Validación de Certificados</title>
        <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
        <link rel="icon" type="image/png" href="https://dashboard.euniversity.mx/imgs/icon_educa_letter.png">
        <meta charset="utf-8">
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta content="Validación de Certificado - eUniversity" name="description">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta name="robots" content="max-image-preview:large" />
        <meta name="viewport" content="initial-scale=1.0, user-scalable=1">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
        <style>
            * {
                font-family: 'DM Sans', sans-serif;
            }
            body {
                margin: 0px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                width: 100%;
                height: 100%;              
            }
            p {
                width: 100%;
                left: 0px;
                font-size: 16px;
                font-family: 'DM Sans', sans-serif;
                font-weight: 400;
                letter-spacing: 0px;
                text-align: center;
                vertical-align: top;
                max-width: 550px;
                color: #727586;
                margin: 0px;
            }
            a:hover {
                cursor: pointer;
                color: #673DE6;
                text-decoration: underline;
            }
            h1 {
                font-family: 'DM Sans', sans-serif;
                font-size: 24px;
                font-weight: 700;
                letter-spacing: 0px;
                text-align: center;
                margin: 8px;
            }
            .background-gradient {

                /*
                COLOR QR
                background #EAEAEC
                blue #081531
                blue tow #3264C2

                */
                background: rgb(4,59,99);
                background: -moz-radial-gradient(circle, rgba(4,59,99,1) 0%, rgba(4,59,99,1) 100%);
                background: -webkit-radial-gradient(circle, rgba(4,59,99,1) 0%, rgba(4,59,99,1) 100%);
                background: radial-gradient(circle, rgba(4,59,99,1) 0%, rgba(4,59,99,1) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#3264c2",endColorstr="#081531",GradientType=1);
            }
            .main-image {
                width: 100%;
                max-width: 382px;
                max-height: 185px;
                height: auto;
            }
            .navigation {
                width: 100%;
                height: 72px;
                display: flex;
                margin: 0;
                padding: 0;
                flex-direction: row;
                align-items: center;
                justify-content: center;
                background-color: rgb(50,100,194);
                /* background-color: #FFD337; */
            }
            .line-yellow {
                width: 100%;
                height: 15px;
                display: flex;
                margin: 0;
                padding: 0;
                flex-direction: row;
                align-items: center;
                justify-content: center;
                background-color: #fcee21;
                /* background-color: #FFD337; */
            }

            .content {
                padding: 20px;
                display: flex;
                flex-direction: column;
                align-items: center;
                /*
                justify-content: center;
                */
                width: auto;
                /*
                height: 100%;
                */
            }

            .card {

                <?php 
                    $useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
                    {   echo 'width:80%;';
                    }
                ?>
                margin-top:30px;
                padding: 20px;
                padding-top: 10px !important;
                border-radius: 8px;
                box-shadow: 0 0 0 1px rgba(53,72,91,.07),0 2px 2px rgba(0,0,0,.01),0 4px 4px rgba(0,0,0,.02),0 10px 8px rgba(0,0,0,.03),0 15px 15px rgba(0,0,0,.03),0 30px 30px rgba(0,0,0,.04),0 70px 65px rgba(0,0,0,.05);
                background-color: #FFF;
            }
            .accent {
                display: inline-block;
                width: 100%;
                color: rgba(8,21,49,1);
                font-size: 11px;
                font-weight: 900;
            }

        </style>
    </head>
    <body class="background-gradient">
        <nav class="navigation background-gradient">
            <a href="https://euniversity.mx" rel="nofollow" target="_blank">
                <img src="https://runipaz.org/wp-content/uploads/2023/12/RUniPaz-Logo-150x150.png" height="50">
            </a>
        </nav>
        <nav class="line-yellow">

        </nav>
        <div class="card ">
                          
            <h3 style="width: 100%; text-align: center;color:#97c122;"> CERTIFICACIÓN </h3>
            <p></p>
            <p> <span class='accent'> ENTREGA </span> CORPORATIVO DE INTELIGENCIA EDUCA </p>
            <p></p>
<?php
	$_certificate = trim(substr(str_replace("/","",filter_var(filter_string_polyfill($_GET['id']))),0,90));
	require 'connect.php';
	$_result = mysqli_query($_mysqli,"SELECT * FROM certificaciones WHERE identifier='".$_certificate."'; ");
    $_found = 0;
	if ($_result) {
	    while ($_row = mysqli_fetch_array($_result, MYSQLI_ASSOC)) {
            $_found = 1;
	    	
            echo "<p> <span class='accent'> IDENTIFICADOR </span>";
            echo $_row['identifier'];
            echo "</p>";

            echo "<p> <span class='accent'> TIPO </span>";
            echo $_row['type'];
            echo "</p>";

            echo "<p> <span class='accent'> DESCRIPCIÓN </span>";
            echo $_row['description'];
            echo "</p>";

            echo "<p> <span class='accent'> MODALIDAD </span>";
            echo $_row['modality'];
            echo "</p>";

            echo "<p> <span class='accent'> SEDE </span>";
            echo $_row['campus'];
            echo "</p>";

            echo "<p> <span class='accent'> VALOR </span>";
            echo $_row['value'];
            echo "</p>";

            echo "<p> <span class='accent'> NOMBRE </span>";
            echo $_row['name']." ".$_row['lastname'];
            echo "</p>";

            echo "<p> <span class='accent'> EMAIL </span>";
            echo $_row['email'];
            echo "</p>";

            echo "<p> <span class='accent'> INICIO </span>";
            echo $_row['start'];
            echo "</p>";
            echo "<p> <span class='accent'> TERMINO </span>";
            echo $_row['finish'];
            echo "</p>";
	    }
	}

	if ($_found == 0) {
        echo "<h1> NO ENCONTRADO </h1>";
    }
?>
		</div>
	</body>
</html>

<?php

	function filter_string_polyfill(string $string) {
        $str = preg_replace('/\x00|<[^>]*>?/', '', $string);
        return str_replace(["'", '"'], ['&#39;', '&#34;'], $str);
    }

?>