<!DOCTYPE html>
<html>
<head>
<title>Sümeyra & Çağrı | Biz Evlenmeye Karar Verdik</title>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Bu mutlu günümüzde sizleri de aramızda görmek isteriz. Pandemi süreci bizleri ayırmaya çalışsada sizler için bir web sitesi hazırladık. Yanımızda olduğunuzu biliyoruz. Şimdiden teşekkürler :)" />
<!-- //for-mobile-apps -->
<link href='//fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href="css/jquery.classycountdown.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
	<div class="content">
		<h1>Web Sitemiz Yakın Zamanda Yayında Olacaktır</h1>
			<div class="main">
				<div id="countdown9" class="ClassyCountdownDemo"></div>
			</div>
		<p class="copy_rights">&copy; 2020 Sümeyra & Çağrı .Tüm Hakları Saklıdır.| Design by  <a href="https://www.fibercozum.com" target="_blank"> Fiberçözüm Yazılım</a></p>
	</div>
				<script src="js/jquery.min.js"></script>
				<script src="js/jquery.knob.js"></script>
				<script src="js/jquery.throttle.js"></script>
				<script src="js/jquery.classycountdown.js"></script>
									<script>
                                        $(document).ready(function() {
                                            $('#countdown9').ClassyCountdown({
                                                end: '1388468325',
                                                now: '1387700000',
                                                labels: true,
                                                style: {
                                                    element: "",
                                                    textResponsive: .5,
                                                    days: {
                                                        gauge: {
                                                            thickness: .10,
                                                            bgColor: "rgba(0,0,0,0)",
                                                            fgColor: "#1abc9c",
                                                            lineCap: 'round'
                                                        },
                                                        textCSS: 'font-weight:300; color:#fff;'
                                                    },
                                                    hours: {
                                                        gauge: {
                                                            thickness: .10,
                                                            bgColor: "rgba(0,0,0,0)",
                                                            fgColor: "#05BEF6",
                                                            lineCap: 'round'
                                                        },
                                                        textCSS: ' font-weight:300; color:#fff;'
                                                    },
                                                    minutes: {
                                                        gauge: {
                                                            thickness: .10,
                                                            bgColor: "rgba(0,0,0,0)",
                                                            fgColor: "#8e44ad",
                                                            lineCap: 'round'
                                                        },
                                                        textCSS: ' font-weight:300; color:#fff;'
                                                    },
                                                    seconds: {
                                                        gauge: {
                                                            thickness: .10,
                                                            bgColor: "rgba(0,0,0,0)",
                                                            fgColor: "#f39c12",
                                                            lineCap: 'round'
                                                        },
                                                        textCSS: ' font-weight:300; color:#fff;'
                                                    }

                                                },
                                                onEndCallback: function() {
                                                    console.log("Time out!");
                                                }
                                            });
                                        });
                                    </script>
</body>
</html>
