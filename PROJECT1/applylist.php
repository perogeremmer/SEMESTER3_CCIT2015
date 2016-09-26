<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Recruitment Online</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Admin Recruitment Page
                    </a>
                </li>
                <li>
                    <a href="admin.html">Dashboard</a>
                </li>
                <li>
                    <a href="applylist.php">Apply List</a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><font color="red"><a href="addnews.html">Add News</a></font></li>
                    <li><font color="red"><a href="news.php">List News</a></font></li>
                  </ul>
                </li>
            </ul>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                       <div class="jumbotron">
                          <!--<h1>Hello, Admin !</h1>-->
                          <div class="panel panel-default">
                          <!-- Default panel contents -->
                          <div class="panel-heading">List of Vacancy Apply</div>

                          <!-- Table -->
                          <table class="table">
                            <thead>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Jobdesk</th>
                            </thead>
                            <?php
                            // untuk meload data xml (buku.xml) dengan cara SimpleXML 
                            $books = new SimpleXMLElement('pelamar.xml', null, true);
                             
                            // menampilkan data ke XML ke dalam tabel HTML
                            // melakukan looping penampilan data buku
                            foreach($books as $buku)
                            {
                            echo "
                            <tbody>
                                <td>{$buku->id_pelamar}</td>
                                <td>{$buku->nama}</td>
                                <td>{$buku->email}</td>
                                <td>{$buku->address}</td>
                                <td>{$buku->jobdesk}</td>
                            </tbody>";
                            }
                            ?>

                          </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>