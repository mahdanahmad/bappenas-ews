<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LPG Monitor - Bappenas</title>

    <!-- Bootstrap core CSS -->
    <link href="<?PHP echo base_url()?>assets/lib/design/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?PHP echo base_url()?>assets/lib/design/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?PHP echo base_url()?>assets/lib/design/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?PHP echo base_url()?>assets/lib/design/css/creative.css" rel="stylesheet">


    <style type="text/css">
    .nopadding{
      padding: 0px;
    }
    .box{
      background: #2c4161;
      color: #fff ;
      border-radius: 2px;
      margin-top: 20px;
      font-family: 'Open Sans', 'Helvetica Neue', Arial, sans-serif;
      padding: 10px;
      font-size: 13px;
    }
    .info{
      font-size: 10px;
    }
    .green{
      background: #8bc34a;
      color: #444 !important;
    }
    .red{
      background: #ff7272;
      color: #000 !important;
    }
    .yellow{
      background: #ffeb3b;
      color: #444 !important;
    }
    .orange{
      background:#ff9800;
      color: #444 !important;
    }

    .br10{
      margin-bottom: 5px;
    }
    .thvalue{
      font-weight: 700;
    }
    .month{
      border-bottom: 2.2px solid #1e3455;
      padding: 5px 2px;
      text-align: center;
      font-weight: 700;
      color: #7e91aa;
      text-transform: uppercase;
    }
    .graphbox{
      width: 20%
    }
    body{
      background: #213044 url("http://jakarta4jakarta.com/Assets/images/header-map.jpg") no-repeat fixed center;
      -moz-background-size: cover;
      -webkit-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
    .turun{
      color: #fff;
    }
    .naik{
      color: #fff;
    }
    .buttonyear{
      border: 1px solid #bdbdbd;
      color: #fff;
      display: -webkit-inline-box;
      padding: 5px 20px;
      cursor: pointer;
    }
    .buttonyear:hover{
      background: rgba(40, 54, 74, 0.72);
    }
    .active{
      background: #2ba0ac
    }
    .y2016, .y2015{
      display: none;
    }
    tr{
      border-bottom: 1px solid #475871;
    }
    td{
      padding-top: 5px;
    }
    ul.navbar-nav > li {
        color: white; cursor: pointer; padding: 2.5px 10px; margin: 0px 5px; font-size: 14px;
    }
    ul.navbar-nav > li.active {
        border-bottom: 2px solid; background: transparent; border-radius: 5px;
    }
    .navbar-shrink ul.navbar-nav > li {
        color: black;
    }
    .secondvis-wrapper {
        display: none;
    }
    </style>
  </head>

  <body id="page-top">



    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?PHP echo base_url()?>assets/image/logo_bappenas.png"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="active">Analisis LPG</li>
            <li>Analisis Komoditas</li>
            <!-- <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead">
      <div class="header-content">
        <div class="header-content-inner">
          <!-- <h2 id="homeHeading">Perbandingan Analisis Persepsi Harga Gas LPG dengan Tingkat Inflasi</h1> -->
          <div class="firstvis-wrapper">
              <h4 style="font-size: 1em;">Perbandingan Analisis Persepsi Harga Gas LPG dengan Tingkat Inflasi</h4>
              <p style="font-size: 85%;margin-bottom:20px;">Visualisasi perbandingan hasil analisis sentimen terkait harga gas LPG dari perbincangan publik via Twitter dengan fluktuasi inflasi di Indonesia</p>
              <p style="font-size:70%;margin-bottom:25px;">R = 0.493 - Correlation of Determination = 0.2394</p>
              <div id="firstvis" style="height: 60vh; min-width: 310px; width: 80%; margin: auto;"></div>
          </div>
          <div class="secondvis-wrapper" style="display:none;">
              <h4 style="font-size: 1em;">Perbandingan Volume Perbincangan Sektor Bahan Pangan dengan Tingkat Inflasi</h4>
              <p style="font-size: 85%;margin-bottom:20px;">Visualisasi perbandingan hasil analisis volume perbincangan beberapa komoditi sektor bahan pangan dengan fluktuasi inflasi di Indonesia</p>
              <p style="font-size:70%;margin-bottom:25px;">Telur: 0.340, Daging: 0.434, LPG: 0.510, Beras: 0.561, Gabungan: 0.730</p>
              <div id="secondvis" style="height: 60vh; min-width: 310px; width: 80%; margin: auto;"></div>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row" id="allbox">
          <div class="col-lg-10 mx-auto text-center">
            <p class="text-faded">Analisis <span id="box-title">Persepsi harga gas LPG</span> dan Tingkat Inflasi per Bulan</p>
            <div class="buttonyear active" id="y2017">2017</div>
            <div class="buttonyear" id="y2016">2016</div>
            <div class="buttonyear" id="y2015">2015</div>
          </div>
        </div>
      </div>
    </section>




    <!-- templating -->
    <div class="col-md-4" id="tb0" style="display: none">
      <div class="col-md-12 nopadding box">
          <div class="month br10" id="m0_1">Januari - 2015</div>
          <div class="value br10">
            <table style="width: 100%">
              <tr>
                <td style="color: #fccc00">Inflasi</td>
                <td class="thvalue" id="m0_2">245</td>
                <td style="padding-left: 10px;">
                    <div class="info" id="m0_3">
                      <i class="fa fa-arrow-up" aria-hidden="true"></i>
                      Naik <b>15%</b>  ( <b>5</b> point )
                    </div>
                </td>
              </tr>
              <tr class="firstvis-wrapper">
                <td style="color: #82ca27">Persepsi Baik</td>
                <td class="thvalue" id="m0_4">545</td>
                <td style="padding-left: 10px;">
                    <div class="info" id="m0_5">
                      <i class="fa fa-arrow-down" aria-hidden="true"></i>
                      Turun <b>25%</b>  ( <b>5</b> point )
                    </div>
                </td>
              </tr>
              <tr class="firstvis-wrapper">
                <td style="color: #26c3ca">Persepsi Netral</td>
                <td class="thvalue" id="m0_6">545</td>
                <td style="padding-left: 10px;">
                    <div class="info" id="m0_7">
                      <i class="fa fa-arrow-down" aria-hidden="true"></i>
                      Turun <b>25%</b>  ( <b>5</b> point )
                    </div>
                </td>
              </tr>
              <tr class="firstvis-wrapper">
                <td style="color: #ff7272">Persepsi Buruk</td>
                <td class="thvalue" id="m0_8">545</td>
                <td style="padding-left: 10px;">
                    <div class="info" id="m0_9">
                      <i class="fa fa-arrow-down" aria-hidden="true"></i>
                      Turun <b>25%</b>  ( <b>5</b> point )
                    </div>
                </td>
              </tr>
              <tr class="firstvis-wrapper">
                <td style="color: #fff">Volume Persepsi</td>
                <td class="thvalue" id="m0_10">545</td>
                <td style="padding-left: 10px;">
                    <div class="info" id="m0_11">
                      <i class="fa fa-arrow-down" aria-hidden="true"></i>
                      Turun <b>25%</b>  ( <b>5</b> point )
                    </div>
                </td>
              </tr>
              <tr class="secondvis-wrapper">
                <td style="color: #82ca27">Volume Beras</td>
                <td class="thvalue" id="m0_21">545</td>
                <td style="padding-left: 10px;">
                    <div class="info" id="m0_22">
                      <i class="fa fa-arrow-down" aria-hidden="true"></i>
                      Turun <b>25%</b>  ( <b>5</b> point )
                    </div>
                </td>
              </tr>
              <tr class="secondvis-wrapper">
                <td style="color: #26c3ca">Volume Daging</td>
                <td class="thvalue" id="m0_23">545</td>
                <td style="padding-left: 10px;">
                    <div class="info" id="m0_24">
                      <i class="fa fa-arrow-down" aria-hidden="true"></i>
                      Turun <b>25%</b>  ( <b>5</b> point )
                    </div>
                </td>
              </tr>
              <tr class="secondvis-wrapper">
                <td style="color: #ff7272">Volume LPG</td>
                <td class="thvalue" id="m0_25">545</td>
                <td style="padding-left: 10px;">
                    <div class="info" id="m0_26">
                      <i class="fa fa-arrow-down" aria-hidden="true"></i>
                      Turun <b>25%</b>  ( <b>5</b> point )
                    </div>
                </td>
              </tr>
              <tr class="secondvis-wrapper">
                <td style="color: #fff">Volume Telur</td>
                <td class="thvalue" id="m0_27">545</td>
                <td style="padding-left: 10px;">
                    <div class="info" id="m0_28">
                      <i class="fa fa-arrow-down" aria-hidden="true"></i>
                      Turun <b>25%</b>  ( <b>5</b> point )
                    </div>
                </td>
              </tr>
              <tr>
                <td style="color: #fccc00">Inflasi Inti</td>
                <td class="thvalue" id="m0_12">245</td>
                <td style="padding-left: 10px;">
                    <div class="info" id="m0_13">
                      <i class="fa fa-arrow-up" aria-hidden="true"></i>
                      Naik <b>15%</b>  ( <b>5</b> point )
                    </div>
                </td>
              </tr>
              <tr>
                <td style="color: #fccc00">Inflasi Bergejolak</td>
                <td class="thvalue" id="m0_14">245</td>
                <td style="padding-left: 10px;">
                    <div class="info" id="m0_15">
                      <i class="fa fa-arrow-up" aria-hidden="true"></i>
                      Naik <b>15%</b>  ( <b>5</b> point )
                    </div>
                </td>
              </tr>
              <tr>
                <td style="color: #fccc00">Inflasi Diatur Pemerintah</td>
                <td class="thvalue" id="m0_16">245</td>
                <td style="padding-left: 10px;">
                    <div class="info" id="m0_17">
                      <i class="fa fa-arrow-up" aria-hidden="true"></i>
                      Naik <b>15%</b>  ( <b>5</b> point )
                    </div>
                </td>
              </tr>
            </table>
          </div>
      </div>
    </div>

      <!-- end templating -->

    <!-- Bootstrap core JavaScript -->
    <script src="<?PHP echo base_url()?>assets/lib/design/vendor/jquery/jquery.min.js"></script>
    <script src="<?PHP echo base_url()?>assets/lib/design/vendor/popper/popper.min.js"></script>
    <script src="<?PHP echo base_url()?>assets/lib/design/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?PHP echo base_url()?>assets/lib/design/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?PHP echo base_url()?>assets/lib/design/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="<?PHP echo base_url()?>assets/lib/design/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?PHP echo base_url()?>assets/lib/design/js/creative.min.js"></script>


    <!-- VISUAL GRAPH -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.17/d3.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.4.18/c3.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/c3/0.4.18/c3.min.css">
    <script src="<?PHP echo base_url()?>assets/lib/highchart/highstock.js"></script>
    <script src="<?PHP echo base_url()?>assets/lib/highchart/exporting.js"></script>



    <style type="text/css">
     .highcharts-button-box{
        fill: #2a425c !important;

     }
     .highcharts-range-selector-buttons text{
      color: #009dff !important;
      fill: #009dff !important;
     }
     .highcharts-button path{
      stroke: #009dff !important;
     }
     .highcharts-label text{
      color: #009dff !important;
      fill: #009dff !important;
     }
     .highcharts-range-input tspan{
      color: #009dff !important;
      fill: #009dff !important;
     }
     .highcharts-label-box{
      stroke: #009dff !important;
     }
     tspan{
      fill: #bbb;
     }
     .highcharts-scrollbar-track{
      fill: transparent !important;
     }
    </style>
    <script type="text/javascript">

    var seriesOptions = [],
        secondOptions = [],
        seriesCounter = 0,
        names = ['MSFT', 'AAPL', 'GOOG'];

      /**
       * Create the chart when all data is loaded
       * @returns {undefined}
       */
      function createChart() {

          Highcharts.theme = {
              colors: ['#82ca27', '#26c3ca', '#ff7272', '#fccc00', '#b69aec', '#ffa381',
                       '#4fe2e7', '#FFF263', '#6AF9C4'],
              chart: {
                  backgroundColor: {
                      linearGradient: [0, 0, 500, 500],
                      stops: [
                          [0, 'rgb(255, 255, 255)'],
                          [1, 'rgb(240, 240, 255)']
                      ]
                  },
              },
              title: {
                  style: {
                      color: '#000',
                      font: 'bold 16px "Trebuchet MS", Verdana, sans-serif'
                  }
              },
              subtitle: {
                  style: {
                      color: '#666666',
                      font: 'bold 12px "Trebuchet MS", Verdana, sans-serif'
                  }
              },

              xAxis: {
                gridLineWidth: 0.1,
                labels: {
                  style: {
                    fontSize: '12px'
                  }
                }
              },
              yAxis: {
                gridLineWidth: 0.1,
                title: {
                  style: {
                    textTransform: 'uppercase'
                  }
                },
                labels: {
                  style: {
                    fontSize: '12px'
                  }
                }
              },

              legend: {
                  itemStyle: {
                      font: '9pt Trebuchet MS, Verdana, sans-serif',
                      color: 'black'
                  },
                  itemHoverStyle:{
                      color: 'black'
                  }
              }
          };

          // Apply the theme
          Highcharts.setOptions(Highcharts.theme);

          Highcharts.stockChart('firstvis', {

              rangeSelector: {
                  selected: 4
              },

              chart: {
                     backgroundColor:'rgba(255, 255, 255, 0.0)'
              },

              yAxis: [{ // Primary yAxis
                  labels: {
                      format: '{value}',
                      style: {
                          color: Highcharts.getOptions().colors[2]
                      }
                  },
                  title: {
                      text: 'Inflasi',
                      style: {
                          color: Highcharts.getOptions().colors[2]
                      }
                  },
                //   max: 40,
                  opposite: true

              }, { // Secondary yAxis
                  labels: {
                      format: '{value}',
                      style: {
                          color: Highcharts.getOptions().colors[0]
                      }
                  },
                  title: {
                      text: 'Persepsi',
                      style: {
                          color: Highcharts.getOptions().colors[0]
                      }
                  },
                //   max:40000,
                  opposite: false
              }, { // Tertiary yAxis
                   title: {
                       text: 'Harga Daging & Telur Ayam',
                       style: {
                           color: Highcharts.getOptions().colors[1]
                       }
                   },
                   labels: {
                       format: '{value}',
                       style: {
                           color: Highcharts.getOptions().colors[1]
                       }
                   },
                //    max: 100000,
                   opposite: true

              }],

              legend: {
                  layout: 'vertical',
                  align: 'right',
                  verticalAlign: 'middle'
              },

              tooltip: {
                  pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b style="color:#555">{point.y}</b>',
                  valueDecimals: 2,
                  split: true
              },
              credits: {
                  enabled: false
              },
              plotOptions: {
                  series: {
                      stacking: 'normal'
                  }
              },

              series: seriesOptions
          });

          Highcharts.stockChart('secondvis', {

              rangeSelector: {
                  selected: 4
              },

              chart: {
                     backgroundColor:'rgba(255, 255, 255, 0.0)'
              },

              yAxis: [{ // Primary yAxis
                  labels: {
                      format: '{value}',
                      style: {
                          color: Highcharts.getOptions().colors[2]
                      }
                  },
                  title: {
                      text: 'Inflasi',
                      style: {
                          color: Highcharts.getOptions().colors[2]
                      }
                  },
                  max: 25,
                  opposite: true

              }, { // Secondary yAxis
                  labels: {
                      format: '{value}',
                      style: {
                          color: Highcharts.getOptions().colors[0]
                      }
                  },
                  title: {
                      text: 'Volume',
                      style: {
                          color: Highcharts.getOptions().colors[0]
                      }
                  },
                  max: 50000,
                  opposite: false
            //   }, { // Tertiary yAxis
            //        title: {
            //            text: 'Harga Daging & Telur Ayam',
            //            style: {
            //                color: Highcharts.getOptions().colors[1]
            //            }
            //        },
            //        labels: {
            //            format: '{value}',
            //            style: {
            //                color: Highcharts.getOptions().colors[1]
            //            }
            //        },
            //        max: 100000,
            //        opposite: true

              }],

              legend: {
                  layout: 'vertical',
                  align: 'right',
                  verticalAlign: 'middle'
              },

              tooltip: {
                  pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b style="color:#555">{point.y}</b>',
                  valueDecimals: 2,
                  split: true
              },
              credits: {
                  enabled: false
              },
              plotOptions: {
                  series: {
                      stacking: 'normal'
                  }
              },

              series: secondOptions
          });
      }

      $('.buttonyear').on('click',function(){
        $('.hideshowyear').hide();
        $('.buttonyear').removeClass('active');
        var id = $(this).attr('id');
        $(this).addClass('active');
        $('.'+id).show();

      });

      function drawabox(data){
        var month = ['','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
        var tahun = 2015;
        var getmonth = 1;
        data.forEach(function(dataforeach,i){
          i +=1;
          if(i > 24){
            tahun = 2017;
          }else if(i > 12){
            tahun = 2016;
          }

          // for(var i =2;i<=12;i++){
          $('#allbox').append('<div class="col-md-4 hideshowyear y'+tahun+'" id="tb'+i+'">'+$('#tb0').html()+'</div>');

          $('#tb'+i+' #m0_1').attr('id','m'+i+'_1');
          $('#tb'+i+' #m0_2').attr('id','m'+i+'_2');
          $('#tb'+i+' #m0_3').attr('id','m'+i+'_3');
          $('#tb'+i+' #m0_4').attr('id','m'+i+'_4');
          $('#tb'+i+' #m0_5').attr('id','m'+i+'_5');
          $('#tb'+i+' #m0_6').attr('id','m'+i+'_6');
          $('#tb'+i+' #m0_7').attr('id','m'+i+'_7');
          $('#tb'+i+' #m0_8').attr('id','m'+i+'_8');
          $('#tb'+i+' #m0_9').attr('id','m'+i+'_9');
          $('#tb'+i+' #m0_10').attr('id','m'+i+'_10');
          $('#tb'+i+' #m0_11').attr('id','m'+i+'_11');
          $('#tb'+i+' #m0_12').attr('id','m'+i+'_12');
          $('#tb'+i+' #m0_13').attr('id','m'+i+'_13');
          $('#tb'+i+' #m0_14').attr('id','m'+i+'_14');
          $('#tb'+i+' #m0_15').attr('id','m'+i+'_15');
          $('#tb'+i+' #m0_16').attr('id','m'+i+'_16');

          $('#tb'+i+' #m0_21').attr('id','m'+i+'_21');
          $('#tb'+i+' #m0_22').attr('id','m'+i+'_22');
          $('#tb'+i+' #m0_23').attr('id','m'+i+'_23');
          $('#tb'+i+' #m0_24').attr('id','m'+i+'_24');
          $('#tb'+i+' #m0_25').attr('id','m'+i+'_25');
          $('#tb'+i+' #m0_26').attr('id','m'+i+'_26');
          $('#tb'+i+' #m0_27').attr('id','m'+i+'_27');
          $('#tb'+i+' #m0_28').attr('id','m'+i+'_28');

          $('#m'+i+'_1').html(month[getmonth] +' - '+ tahun );

          // console.log(data.Inflasi);

        //   console.log(dataforeach);

          $('#m'+i+'_2').html(dataforeach.Inflasi);
          $('#m'+i+'_4').html(dataforeach.Positive_value);
          $('#m'+i+'_6').html(dataforeach.Neutral_value);
          $('#m'+i+'_8').html(dataforeach.Negative_value);
          $('#m'+i+'_10').html(dataforeach.Volume_of_relevant_tweets);
          $('#m'+i+'_12').html(dataforeach.Inti);
          $('#m'+i+'_14').html(dataforeach.Bergejolak);
          $('#m'+i+'_16').html(dataforeach.Diatur_pemerintah);

          $('#m'+i+'_21').html(dataforeach.volumeberas);
          $('#m'+i+'_23').html(dataforeach.volumedaging);
          $('#m'+i+'_25').html(dataforeach.volumelpg);
          $('#m'+i+'_27').html(dataforeach.volumetelur);


          if(i>1){

            floatdua = d3.format(".2f");

            var val31 = data[i-2];
            var val32 = data[i-1];
            var getdif3 = val31.Inflasi - val32.Inflasi;
            var text3 = '';
            if(getdif3 > 0){
                var percent = getdif3 / val31.Inflasi * 100 ;
                text3 = '<i class="fa fa-arrow-down" aria-hidden="true"></i>&nbsp;Turun &nbsp; '+floatdua(getdif3);
                $('#m'+i+'_3').addClass('turun');

                $('#m'+i+'_1').addClass('green');

            }else if(getdif3 < 0){
                getdif3 = getdif3 * -1;
                var percent = getdif3 / val31.Inflasi * 100 ;
                text3 = '<i class="fa fa-arrow-up" aria-hidden="true"></i>&nbsp;Naik &nbsp; '+floatdua(getdif3);
                $('#m'+i+'_3').addClass('naik');

                if(getdif3 >= 0.3){
                  $('#m'+i+'_1').addClass('red');
                }
                else if(getdif3 >= 0.2){
                  $('#m'+i+'_1').addClass('orange');
                }else{
                  $('#m'+i+'_1').addClass('yellow');
                }

            }else{
                text3 == '-';
                $('#m'+i+'_1').addClass('green');
            }
            $('#m'+i+'_3').html(text3);



            var val51 = data[i-2];
            var val52 = data[i-1];
            var getdif5 = val51.Positive_value - val52.Positive_value;
            var text5 = '';
            if(getdif5 > 0){
                var percent = getdif5 / val51.Positive_value * 100 ;
                text5 = '<i class="fa fa-arrow-down" aria-hidden="true"></i>&nbsp;Turun &nbsp;<b>'+floatdua(percent)+'</b>% &nbsp; (-'+floatdua(getdif5)+')';
                $('#m'+i+'_5').addClass('turun');
            }else if(getdif5 < 0){
                getdif5 = getdif5 * -1;
                var percent = getdif5 / val51.Positive_value * 100 ;
                text5 = '<i class="fa fa-arrow-up" aria-hidden="true"></i>&nbsp;Naik &nbsp;<b>'+floatdua(percent)+'</b>% &nbsp; (+'+floatdua(getdif5)+')';
                $('#m'+i+'_5').addClass('naik');
            }else{
                text5 == '-';
            }
            $('#m'+i+'_5').html(text5);


            var val71 = data[i-2];
            var val72 = data[i-1];
            var getdif7 = val71.Neutral_value - val72.Neutral_value;
            var text7 = '';
            if(getdif7 > 0){
                var percent = getdif7 / val71.Neutral_value * 100 ;
                text7 = '<i class="fa fa-arrow-down" aria-hidden="true"></i>&nbsp;Turun &nbsp;<b>'+floatdua(percent)+'</b>% &nbsp; (-'+floatdua(getdif7)+')';
                $('#m'+i+'_7').addClass('turun');
            }else if(getdif7 < 0){
                getdif7 = getdif7 * -1;
                var percent = getdif7 / val71.Neutral_value * 100 ;
                text7 = '<i class="fa fa-arrow-up" aria-hidden="true"></i>&nbsp;Naik &nbsp;<b>'+floatdua(percent)+'</b>% &nbsp; (+'+floatdua(getdif7)+')';
                $('#m'+i+'_7').addClass('naik');
            }else{
                text7 == '-';
            }
            $('#m'+i+'_7').html(text7);



            var val91 = data[i-2];
            var val92 = data[i-1];
            var getdif9 = val91.Negative_value - val92.Negative_value;
            var text9 = '';
            if(getdif9 > 0){
                var percent = getdif9 / val91.Negative_value * 100 ;
                text9 = '<i class="fa fa-arrow-down" aria-hidden="true"></i>&nbsp;Turun &nbsp;<b>'+floatdua(percent)+'</b>% &nbsp; (-'+floatdua(getdif9)+')';
                $('#m'+i+'_9').addClass('turun');
            }else if(getdif9 < 0){
                getdif9 = getdif9 * -1;
                var percent = getdif9 / val91.Negative_value * 100 ;
                text9 = '<i class="fa fa-arrow-up" aria-hidden="true"></i>&nbsp;Naik &nbsp;<b>'+floatdua(percent)+'</b>% &nbsp; (+'+floatdua(getdif9)+')';
                $('#m'+i+'_9').addClass('naik');
            }else{
                text9 == '-';
            }
            $('#m'+i+'_9').html(text9);


            var val111 = data[i-2];
            var val112 = data[i-1];
            var getdif11 = val111.Volume_of_relevant_tweets - val112.Volume_of_relevant_tweets;
            var text11 = '';
            if(getdif11 > 0){
                var percent = getdif11 / val111.Volume_of_relevant_tweets * 100 ;
                text11 = '<i class="fa fa-arrow-down" aria-hidden="true"></i>&nbsp;Turun &nbsp;<b>'+floatdua(percent)+'</b>% &nbsp; (-'+floatdua(getdif11)+')';
                $('#m'+i+'_11').addClass('turun');
            }else if(getdif11 < 0){
                getdif11 = getdif11 * -1;
                var percent = getdif11 / val111.Volume_of_relevant_tweets * 100 ;
                text11 = '<i class="fa fa-arrow-up" aria-hidden="true"></i>&nbsp;Naik &nbsp;<b>'+floatdua(percent)+'</b>% &nbsp; (+'+floatdua(getdif11)+')';
                $('#m'+i+'_11').addClass('naik');
            }else{
                text11 == '-';
            }
            $('#m'+i+'_11').html(text11);


            var val131 = data[i-2];
            var val132 = data[i-1];
            var getdif13 = val131.Inti - val132.Inti;
            var text13 = '';
            if(getdif13 > 0){
                var percent = getdif13 / val131.Inti * 100 ;
                text13 = '<i class="fa fa-arrow-down" aria-hidden="true"></i>&nbsp;Turun &nbsp; '+floatdua(getdif13);
                $('#m'+i+'_13').addClass('turun');
            }else if(getdif13 < 0){
                getdif13 = getdif13 * -1;
                var percent = getdif13 / val131.Inti * 100 ;
                text13 = '<i class="fa fa-arrow-up" aria-hidden="true"></i>&nbsp;Naik &nbsp; '+floatdua(getdif13);
                $('#m'+i+'_13').addClass('naik');
            }else{
                text13 == '-';
            }
            $('#m'+i+'_13').html(text13);


            var val151 = data[i-2];
            var val152 = data[i-1];
            var getdif15 = val151.Bergejolak - val152.Bergejolak;
            var text15 = '';
            if(getdif15 > 0){
                var percent = getdif15 / val151.Bergejolak * 100 ;
                text15 = '<i class="fa fa-arrow-down" aria-hidden="true"></i>&nbsp;Turun &nbsp; '+floatdua(getdif15);
                $('#m'+i+'_15').addClass('turun');
            }else if(getdif15 < 0){
                getdif15 = getdif15 * -1;
                var percent = getdif15 / val151.Bergejolak * 100 ;
                text15 = '<i class="fa fa-arrow-up" aria-hidden="true"></i>&nbsp;Naik &nbsp; '+floatdua(getdif15);
                $('#m'+i+'_15').addClass('naik');
            }else{
                text15 == '-';
            }
            $('#m'+i+'_15').html(text15);

            var val171 = data[i-2];
            var val172 = data[i-1];
            var getdif17 = val171.Diatur_pemerintah - val172.Diatur_pemerintah;
            var text17 = '';
            if(getdif17 > 0){
                var percent = getdif17 / val171.Diatur_pemerintah * 100 ;
                text17 = '<i class="fa fa-arrow-down" aria-hidden="true"></i>&nbsp;Turun &nbsp; '+floatdua(getdif17);
                $('#m'+i+'_17').addClass('turun');
            }else if(getdif17 < 0){
                getdif17 = getdif17 * -1;
                var percent = getdif17 / val171.Diatur_pemerintah * 100 ;
                text17 = '<i class="fa fa-arrow-up" aria-hidden="true"></i>&nbsp;Naik &nbsp; '+floatdua(getdif17);
                $('#m'+i+'_17').addClass('naik');
            }else{
                text17 == '-';
            }
            $('#m'+i+'_17').html(text17);

            var val221 = data[i-2];
            var val222 = data[i-1];
            var getdif22 = val221.volumeberas - val222.volumeberas;
            var text22 = '';
            if(getdif22 > 0){
                var percent = getdif22 / val221.volumeberas * 100 ;
                text22 = '<i class="fa fa-arrow-down" aria-hidden="true"></i>&nbsp;Turun &nbsp; '+ (getdif22);
                $('#m'+i+'_22').addClass('turun');
            }else if(getdif22 < 0){
                getdif22 = getdif22 * -1;
                var percent = getdif22 / val221.volumeberas * 100 ;
                text22 = '<i class="fa fa-arrow-up" aria-hidden="true"></i>&nbsp;Naik &nbsp; '+ (getdif22);
                $('#m'+i+'_22').addClass('naik');
            }else{
                text22 == '-';
            }
            $('#m'+i+'_22').html(text22);

            var val241 = data[i-2];
            var val242 = data[i-1];
            var getdif24 = val241.volumedaging - val242.volumedaging;
            var text24 = '';
            if(getdif24 > 0){
                var percent = getdif24 / val241.volumedaging * 100 ;
                text24 = '<i class="fa fa-arrow-down" aria-hidden="true"></i>&nbsp;Turun &nbsp; '+ (getdif24);
                $('#m'+i+'_24').addClass('turun');
            }else if(getdif24 < 0){
                getdif24 = getdif24 * -1;
                var percent = getdif24 / val241.volumedaging * 100 ;
                text24 = '<i class="fa fa-arrow-up" aria-hidden="true"></i>&nbsp;Naik &nbsp; '+ (getdif24);
                $('#m'+i+'_24').addClass('naik');
            }else{
                text24 == '-';
            }
            $('#m'+i+'_24').html(text24);

            var val261 = data[i-2];
            var val262 = data[i-1];
            var getdif26 = val261.volumelpg - val262.volumelpg;
            var text26 = '';
            if(getdif26 > 0){
                var percent = getdif26 / val261.volumelpg * 100 ;
                text26 = '<i class="fa fa-arrow-down" aria-hidden="true"></i>&nbsp;Turun &nbsp; '+ (getdif26);
                $('#m'+i+'_26').addClass('turun');
            }else if(getdif26 < 0){
                getdif26 = getdif26 * -1;
                var percent = getdif26 / val261.volumelpg * 100 ;
                text26 = '<i class="fa fa-arrow-up" aria-hidden="true"></i>&nbsp;Naik &nbsp; '+ (getdif26);
                $('#m'+i+'_26').addClass('naik');
            }else{
                text26 == '-';
            }
            $('#m'+i+'_26').html(text26);

            var val281 = data[i-2];
            var val282 = data[i-1];
            var getdif28 = val281.volumetelur - val282.volumetelur;
            var text28 = '';
            if(getdif28 > 0){
                var percent = getdif28 / val281.volumetelur * 100 ;
                text28 = '<i class="fa fa-arrow-down" aria-hidden="true"></i>&nbsp;Turun &nbsp; '+ (getdif28);
                $('#m'+i+'_28').addClass('turun');
            }else if(getdif28 < 0){
                getdif28 = getdif28 * -1;
                var percent = getdif28 / val281.volumetelur * 100 ;
                text28 = '<i class="fa fa-arrow-up" aria-hidden="true"></i>&nbsp;Naik &nbsp; '+ (getdif28);
                $('#m'+i+'_28').addClass('naik');
            }else{
                text28 == '-';
            }
            $('#m'+i+'_28').html(text28);


          }else{
            $('#m'+i+'_3').html('');
            $('#m'+i+'_5').html('');
            $('#m'+i+'_7').html('');
            $('#m'+i+'_9').html('');
          }


          getmonth +=1;
          if(getmonth >12){
            getmonth = 1;
          }

        })

      }

      function drawanotherbox(data) {

      }

      d3.csv('<?PHP echo base_url()?>assets/data/real.csv',function(data){
        //console.log(data);
        var inti = [];
        var bergejolak = [];
        var diatur = [];
        var inflasi = [];
        var sentimen = [];
        var goodsentimen = [];
        var neutralsentimen = [];
        var negativesentimen = [];
        var dagingayam = [];
        var telurayam = [];

        var volumeberas = [];
        var volumedaging = [];
        var volumelpg = [];
        var volumetelur = [];

        data.forEach(function(cs, i){
          inti.push([parseInt(cs.Analysis_Date),parseFloat(cs.Inti)]);
          bergejolak.push([parseInt(cs.Analysis_Date),parseFloat(cs.Bergejolak)]);
          diatur.push([parseInt(cs.Analysis_Date),parseFloat(cs.Diatur_pemerintah)]);
          inflasi.push([parseInt(cs.Analysis_Date),parseFloat(cs.Inflasi)]);
          sentimen.push([parseInt(cs.Analysis_Date),parseFloat(cs.Volume_of_relevant_tweets)]);
          goodsentimen.push([parseInt(cs.Analysis_Date),parseFloat(cs.Positive_value)]);
          neutralsentimen.push([parseInt(cs.Analysis_Date),parseFloat(cs.Neutral_value)]);
          negativesentimen.push([parseInt(cs.Analysis_Date),parseFloat(cs.Negative_value)]);
          dagingayam.push([parseInt(cs.Analysis_Date),parseFloat(cs.dagingayam)]);
          telurayam.push([parseInt(cs.Analysis_Date),parseFloat(cs.telurayam)]);

          if (i > 2) {
              volumeberas.push([parseInt(cs.Analysis_Date),parseFloat(cs.volumeberas)]);
              volumedaging.push([parseInt(cs.Analysis_Date),parseFloat(cs.volumedaging)]);
              volumelpg.push([parseInt(cs.Analysis_Date),parseFloat(cs.volumelpg)]);
              volumetelur.push([parseInt(cs.Analysis_Date),parseFloat(cs.volumetelur)]);
          }

        })
        seriesOptions = [
        {
            type: 'areaspline',
            name: 'Volume ',
            yAxis: 1,
            data: goodsentimen,
        },
        {
            type: 'areaspline',
            name: 'Persepsi Netral',
            yAxis: 1,
            data: neutralsentimen,
        },
        {
            type: 'areaspline',
            name: 'Persepsi Buruk',
            yAxis: 1,
            data: negativesentimen,
        },
        //   {
        //     type: 'spline',
        //     name: 'Inflasi',
        //     data: inflasi,
        //     yAxis: 0,
        //     dashStyle: 'ShortDash',
        //     lineWidth: 3
        //     // fillColor: {
        //     //     linearGradient: {
        //     //         x1: 0,
        //     //         y1: 0,
        //     //         x2: 0,
        //     //         y2: 1
        //     //     },
        //     //     stops: [
        //     //         [0, '#ab7efa'],
        //     //         [1, 'rgba(255, 255, 255, 0.0)']
        //     //     ]
        //     // }
        //   },
        //   {
        //     type: 'spline',
        //     name: 'Inflasi Inti',
        //     data: inti,
        //     yAxis: 0,
        //     dashStyle: 'ShortDash'
        //   },
          {
            type: 'spline',
            name: 'inflasi Bergejolak',
            data: bergejolak,
            yAxis: 0,
            dashStyle: 'ShortDash'
          },
          {
            type: 'spline',
            name: 'inflasi Diatur',
            data: diatur,
            yAxis: 0,
            dashStyle: 'ShortDash'
          },
          {
            type: 'spline',
            name: 'Harga Daging Ayam',
            data: dagingayam,
            yAxis: 2,
            // dashStyle: 'ShortDash'
          },
          {
            type: 'spline',
            name: 'Harga Telur Ayam',
            data: telurayam,
            yAxis: 2,
            // dashStyle: 'ShortDash'
          },
        ];

        secondOptions = [
        {
            type: 'areaspline',
            name: 'Volume Beras',
            yAxis: 1,
            data: volumeberas,
        },
        {
            type: 'areaspline',
            name: 'Volume Daging Ayam',
            yAxis: 1,
            data: volumedaging,
        },
        {
            type: 'areaspline',
            name: 'Volume LPG',
            yAxis: 1,
            data: volumelpg,
        },
        {
            type: 'areaspline',
            name: 'Volume Telur Ayam',
            yAxis: 1,
            data: volumetelur,
        },
        //   {
        //     type: 'spline',
        //     name: 'Inflasi',
        //     data: inflasi,
        //     yAxis: 0,
        //     dashStyle: 'ShortDash',
        //     lineWidth: 3
        //     // fillColor: {
        //     //     linearGradient: {
        //     //         x1: 0,
        //     //         y1: 0,
        //     //         x2: 0,
        //     //         y2: 1
        //     //     },
        //     //     stops: [
        //     //         [0, '#ab7efa'],
        //     //         [1, 'rgba(255, 255, 255, 0.0)']
        //     //     ]
        //     // }
        //   },
        //   {
        //     type: 'spline',
        //     name: 'Inflasi Inti',
        //     data: inti,
        //     yAxis: 0,
        //     dashStyle: 'ShortDash'
        //   },
          {
            type: 'spline',
            name: 'inflasi Bergejolak',
            data: bergejolak,
            yAxis: 0,
            dashStyle: 'ShortDash'
          },
          {
            type: 'spline',
            name: 'inflasi Diatur',
            data: diatur,
            yAxis: 0,
            dashStyle: 'ShortDash'
          },
        ];
        //console.log(seriesOptions);

        createChart();
        drawabox(data);
        drawanotherbox(data);


      })

      $(' ul.navbar-nav li ').click(function() {
          if ($( this ).text() == 'Analisis LPG') {
              $(' .firstvis-wrapper ').show();
              $(' .secondvis-wrapper ').hide();

              $(' #box-title ').html('Persepsi harga gas LPG')
          } else {
              $(' .firstvis-wrapper ').hide();
              $(' .secondvis-wrapper ').show();

              $(' #box-title ').html('Perbincangan Komoditi Bahan Pangan')
          }

          $(' ul.navbar-nav > li ').removeClass('active');
          $( this ).addClass('active');
      })


    </script>

  </body>

</html>
