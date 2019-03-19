<style type="text/css">
    .ticket .ticket__item {

    color: #ffff !important;
}
.watchlist:before {

    color: #ffffff;
    }
</style>


        <section class="container ">
            <div class="order-container print-div"  id="content">
                <div class="order">
                   
                    <p class="order__title">Thank you <br><span class="order__descript">you have successfully purchased tickets</span></p>
                </div>

                <div class="ticket">
                    <div class="ticket-position">
                        <div class="ticket__indecator indecator--pre"><div class="indecator-text pre--text">online ticket</div> </div>
                        <div class="ticket__inner">
                             
                             <?php 
                             $count=count($_SESSION['cart']['seats']);
                            if ($_SESSION['cart']['cinema_name']=="Cinema 1") {
                                $price=500;
                            }
                            else{
                                $price=400;
                            }
                              ?>
                            
                            <div class="ticket-secondary">
                                <!--<span class="ticket__item">Ticket number <strong class="ticket__number"></strong></span>-->
                                <span class="ticket__item ticket__date">Show Time : <?php echo $_SESSION['cart']['show_time'] ?></span>
                                <span class="ticket__item">Show Date : <span class="ticket__cinema"> <?php echo $_SESSION['cart']['date_time'] ?></span></span> <span class="ticket__item">Cinema : <span class="ticket__cinema"> <?php echo $_SESSION['cart']['cinema_name'] ?></span></span> <span class="ticket__item">Price : <span class="ticket__cinema"><strong class="ticket__cost"> Rs <?php echo $count*$price; ?></strong></span>
                               
                            </div>

                            <div class="ticket-primery">
                                <span class="ticket__item ticket__item--primery ticket__film">Film :<br><strong class="ticket__movie"><?php echo $_SESSION['cart']['movie_name'] ?></strong></span>
                                <span class="ticket__item ticket__item--primery">Sits : <span class="ticket__place"><?php 
                              $seats=implode(",", $_SESSION['cart']['seats']);
                              echo $seats;
                                 ?></span></span>
                            </div>


                        </div>
                        <div class="ticket__indecator indecator--post"><div class="indecator-text post--text">online ticket</div></div>
                    </div>
                </div>

                <div class="ticket-control" style="color: #ffffff !important">
                    <a href="#" class="watchlist list--download cmd" style="color: #ffffff !important; display: none;" >Download</a>
                    <!--<a href="#" class="watchlist list--print print-btn" style="color: #ffffff !important">Print</a>-->
                </div>

            </div>
        </section>
        
        <div class="clearfix"></div>

        </div>

    <!-- open/close -->
        

        
        <script type="text/javascript">
            $(document).ready(function() {
                $('.top-scroll').parent().find('.top-scroll').remove();
            });
        </script>

<script type="text/javascript">
    $('.print-btn').click(function() {
        w = window.open();
        var ht = $('.print-div').html()
        var head = $('head').html()
        w.document.write('<html>');
        w.document.write('<head>');
        w.document.write(head);
        // w.document.write('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
        // w.document.write('<link rel="stylesheet" type="text/css" href="' + url + '/assets/css/bootstrap.min.css">');
        // w.document.write('<link rel="stylesheet" type="text/css" href="' + url + '/assets/css/bootstrap-responsive.min.css">');
        // w.document.write('<link rel="stylesheet" type="text/css" href="' + url + '/assets/css/font-awesome.min.css">');
        // w.document.write('<link rel="stylesheet" type="text/css" href="' + url + '/assets/css/style.css">');
        // w.document.write('<link rel="stylesheet" type="text/css" href="' + url + '/assets/css/responsive.css">');
        w.document.write('<style>.order{display:none;}</style>')
        w.document.write('<style>.ticket-control{display:none;}</style>')
        w.document.write('<style>.product-tital{padding-left:220px;position: fixed;margin-top: -30px;}</style>')
        w.document.write('<style>. table.minimalistBlack {width: 100%;height: 200px; text-align: left; border-collapse: collapse;}</style>')
         w.document.write('<style>table.minimalistBlack td, table.minimalistBlack th {border: 1px solid #000000;padding: 5px 4px;}</style>')
         w.document.write('<style>table.minimalistBlack tbody td {font-size: 13px;}</style>')
         w.document.write('<style>table.minimalistBlack thead {background: #CFCFCF;background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);border-bottom: 3px solid #000000;}</style>')
         w.document.write('<style>table.minimalistBlack thead th {font-size: 15px;font-weight: bold;color: #000000;text-align: left;}</style>')
        w.document.write('</head>');
        w.document.write('<body>');
        w.document.write(ht);
        w.document.write('<body>');
        w.document.write('</html>');
        setTimeout(function() {
            w.print();
            w.close();
        }, 300);
    })
</script>
    <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>

<script type="text/javascript">
  
var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};

$('.cmd').click(function () {   
    doc.fromHTML($('#content').html()
        var head = $('head').html()
        w.document.write('<html>');
        w.document.write('<head>');
        w.document.write(head);
        // w.document.write('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
        // w.document.write('<link rel="stylesheet" type="text/css" href="' + url + '/assets/css/bootstrap.min.css">');
        // w.document.write('<link rel="stylesheet" type="text/css" href="' + url + '/assets/css/bootstrap-responsive.min.css">');
        // w.document.write('<link rel="stylesheet" type="text/css" href="' + url + '/assets/css/font-awesome.min.css">');
        // w.document.write('<link rel="stylesheet" type="text/css" href="' + url + '/assets/css/style.css">');
        // w.document.write('<link rel="stylesheet" type="text/css" href="' + url + '/assets/css/responsive.css">');
        w.document.write('<style>.order{display:none;}</style>')
        w.document.write('<style>.ticket-control{display:none;}</style>')
        w.document.write('<style>.product-tital{padding-left:220px;position: fixed;margin-top: -30px;}</style>')
        w.document.write('<style>. table.minimalistBlack {width: 100%;height: 200px; text-align: left; border-collapse: collapse;}</style>')
         w.document.write('<style>table.minimalistBlack td, table.minimalistBlack th {border: 1px solid #000000;padding: 5px 4px;}</style>')
         w.document.write('<style>table.minimalistBlack tbody td {font-size: 13px;}</style>')
         w.document.write('<style>table.minimalistBlack thead {background: #CFCFCF;background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);border-bottom: 3px solid #000000;}</style>')
         w.document.write('<style>table.minimalistBlack thead th {font-size: 15px;font-weight: bold;color: #000000;text-align: left;}</style>')
        w.document.write('</head>');
        w.document.write('<body>');
        w.document.write(ht);
        w.document.write('<body>');
        w.document.write('</html>');, 15, 15, {
        'width': 170,
            'elementHandlers': specialElementHandlers
    });
    doc.save('sample-file.pdf');
});

// This code is collected but useful, click below to jsfiddle link.

</script>
</script>
<script type="text/javascript">
              $(document).ready(function() {
                init_Home();
              });
            </script>