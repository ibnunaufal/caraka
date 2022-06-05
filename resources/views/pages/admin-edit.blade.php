<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{ asset('../css/vendors.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('../css/bootstrap.min.css') }}" rel="stylesheet"> -->
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel = "icon" href = "{{ asset('images/favicon.png') }}" type = "image/x-icon">
     <title>Admin Page | Caraka</title>
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
        <img src="{{ asset('images/favicon.png') }}" alt="" style="width: 50px;
    height: auto;
    margin: 5px;">
      <!-- <i class='bx bxl-c-plus-plus'></i> -->
      <span class="logo_name">Caraka</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="/admin" class="{{ $type=="" ? 'active' : '' }}">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="/admin?type=cat" class="{{ $type=="cat" ? 'active' : '' }}">
            <i class='bx bx-category-alt' ></i>
            <span class="links_name">Category</span>
          </a>
        </li>
        <li>
        <a href="/admin?type=gal" class="{{ $type=="gal" ? 'active' : '' }}">
            <i class='bx bx-photo-album' ></i>
            <span class="links_name">Gallery</span>
          </a>
        </li>
        <li>
        <a href="/admin?type=user" class="{{ $type=="user" ? 'active' : '' }}">
            <i class='bx bx-group' ></i>
            <span class="links_name">Users & Admin</span>
          </a>
        </li>
        <li class="log_out">
          <a href="/actionlogout">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">
            {{ $type==''? 'Dashboard':''}}
            {{$type=='cat'?'Kategori & Sub':''}}
            {{$type=='gal'?'Gallery':''}}
            {{$type=='rev'?'Review':''}}
            {{$type=='head'?'Headline':''}}
            {{$type=='aca'?'Acara':''}}
            {{$type=='user'?'User & Admin':''}}
        </span>
      </div>
      <!-- <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div> -->
    </nav>
    @if(session('message'))
    <div class="alert alert-primary">
        {{session('message')}}
    </div>
    @endif
    @if($type == "")
    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="indicator">
              <!-- <i class='bx bx-up-arrow-alt'></i> -->
              <span class="text">Total:</span>
            </div>
            <div class="number">120</div>
            <div class="box-topic">Tempat</div>
          </div>
          <i class='bx bx-map cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="indicator">
              <!-- <i class='bx bx-up-arrow-alt'></i> -->
              <span class="text">Total:</span>
            </div>
            <div class="number">9</div>
            <div class="box-topic">Kategori & Sub</div>
          </div>
          <i class='bx bx-category-alt cart two'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="indicator">
              <!-- <i class='bx bx-up-arrow-alt'></i> -->
              <span class="text">Total:</span>
            </div>
            <div class="number">9</div>
            <div class="box-topic">Review</div>
          </div>
          <i class='bx bx-message-dots cart three'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="indicator">
              <!-- <i class='bx bx-up-arrow-alt'></i> -->
              <span class="text">Total:</span>
            </div>
            <div class="number">9</div>
            <div class="box-topic">Acara</div>
          </div>
          <i class='bx bx-calendar-event cart four'></i>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Daftar Tempat</div>
          <div class="sales-details">
          <div class="table-responsive">
            <table class="table">
                    <tr class="table-bordered">
                        <th>Nama</th>
                        <th>Gambar Utama</th>
                        <th>Ticket</th>
                        <th>Tags</th>
                        <th>Operasional</th>
                        <th>Aksi</th>
                    </tr>
                    @php
                        $i = 0;
                    @endphp
                    
                </table>
            </div>
          </div>
          <div class="button">
            <a href="/admin?type=temp">Lihat Semua</a>
          </div>
        </div>
        <div class="top-sales box">
          <div class="title">Daftar Acara</div>
          <ul class="top-sales-details">
              <li>
                  <span class="product">Nama Acara</span>
                  <span class="price">Mulai</span>
                  <span class="price">Akhir</span>
                </li>
              
          </ul>
          <div class="button">
            <a href="/admin?type=aca">Lihat Semua</a>
          </div>
        </div>
      </div>
    </div>
    @endif
    @if($type == "caat")
    <br><br><br><br>
    {{ $category }}
    {{ $category->name }}
    @endif
    @if($type == "cat")
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <div class="home-content">
      <div class="sales-boxes" style="width:100%;">
        <div class="recent-sales box" style="width:100%;">
          <div class="title">
            Daftar Kategori
          </div>
          <div class="sales-details">
          <div class="table-responsive">
          <form method="post" action="{{ route('category.update',$category->id) }}" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                            <label for="txtName">Name:</label>
                            <input type="text" class="form-control" id="txtName" placeholder="Enter First Name" name="txtName" value="{{ $category->name }}">
                        </div>
                        <div class="form-group">
                            <label for="txtLastName">Image:</label><br>
                            <img src ="{{ URL::to('/') }}/img/category/{{ $category->image }}" style="max-height:50px; width:auto;" alt = "asd">
                            <input type="file" name="image" class="form-control" placeholder="Post Title" value=" {{ $category->image}} ">
                        </div>
                        <div class="form-group">
                            <label for="txtPdf">PDF:</label>
                            <input type="text" class="form-control" id="txtPdf" placeholder="Enter PDF Link" name="txtPdf" value="{{ $category->pdf }}">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
          </div>
          <!-- <div class="button">
            <a href="/admin?type=temp">Lihat Semua</a>
          </div> -->
        </div>
      </div>
    </div>
    @endif
    @if($type == "a")
    <br><br><br><br><br>
    a <br>
    {{ $gallery }} <br> <br>
    {{ $category }}
    @endif
    @if($type == "gal")
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <div class="home-content">
        <div class="sales-boxes" style="width:100%;">
            <div class="recent-sales box" style="width:100%;">
            <div class="title">Edit Product</div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="sales-details">
                    <div class="table-responsive">
                    <form method="post" action="{{ route('gallery.update',$gallery->id) }}" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                            <label for="txtName">Name:</label>
                            <input type="text" class="form-control" id="txtName" placeholder="Enter First Name" name="txtName" value="{{ $gallery->name }}">
                        </div>
                        <div class="form-group">
                            <label for="txtName">Category:</label>
                            
                            <select class="form-control" name="txtCategory" value="{{ $gallery->category }}">
                                <option>Select Item</option>
                                @foreach ($category as $cat)
                                    <option value="{{$cat->id}}" {{ $cat->id == $gallery->category ? 'selected' : '' }}>{{$cat->name}}</option>
                                @endforeach    
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="txtLastName">Image:</label><br>
                            <img src ="{{ URL::to('/') }}/img/gallery/{{ $gallery->image }}" style="max-height:50px; width:auto;" alt = "asd">
                            <input type="file" name="image" class="form-control" placeholder="Post Title" value=" {{ $gallery->image}} ">
                            <!-- <input type="text" class="form-control" id="txtImage" placeholder="Enter Last Name" name="txtImage" value="{{ $gallery->image }}"> -->
                        </div>
                        <!-- <div class="form-group">
                            <label for="txtLastName">Pdf:</label>
                            <textarea class="form-control" id="txtPdf" name="txtPdf" rows="2" placeholder="Enter Address">{{ $gallery->pdf }}</textarea>
                        </div> -->
                        <!-- <div class="form-group">
                            <label for="txtLastName">Image:</label>
                            <input type="text" class="form-control" id="txtImage" placeholder="Enter Image" name="txtImage">
                        </div> -->
                        <!-- <div class="form-group">
                            <label for="txtAddress">Address:</label>
                            <textarea class="form-control" id="txtAddress" name="txtAddress" rows="10" placeholder="Enter Address"></textarea>
                        </div> -->
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    @endif
    @if($type == "user")
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <div class="home-content">
        <div class="sales-boxes" style="width:100%;">
            <div class="recent-sales box" style="width:100%;">
            <div class="title">Daftar User & Admin</div>
                <div class="sales-details">
                    <div class="table-responsive">
                        <table class="table">
                            <tr class="table-bordered">
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Admin</th>
                                <th>Super Admin</th>
                                <th>Aksi</th>
                            </tr>
                            @php
                                $i = 0;
                            @endphp
                            @foreach($users as $user)
                            @if(auth()->user()->id != $user->id)
                            <tr class="table-bordered">
                                <td class="td-bordered col-md-2">{{ $user->name }}</td>
                                <td class="td-bordered col-md-1">{{ $user->email }}</td>
                                <td class="td-bordered col-md-2">
                                    {{ $user->isAdmin == '1' ? 'Ya' : 'Tidak' }}
                                </td>
                                <td class="td-bordered col-md-2">
                                {{ $user->isSuperAdmin == '1' ? 'Ya' : 'Tidak' }}
                                </td>
                                <td class="td-bordered col-md-1" style="text-align: center;">
                                @if(auth()->user()->isAdmin == 1)
                                    <a {{ $user->isAdmin == 1 ? 'href=/setnonadmin?id='.$user->id : 'href=/setadmin?id='.$user->id }} >
                                    <button class="btn btn-primary">
                                        {{ $user->isAdmin ? 'Hilangkan Akses' : 'Jadikan' }} Admin
                                    </button>
                                    </a>
                                @endif
                                @if(auth()->user()->isAdmin != 1)
                                    <button class="btn btn-primary" disabled="disabled">
                                    Jadikan Admin
                                    </button>
                                @endif
                                @if(auth()->user()->isSuperAdmin == 1)
                                <hr>
                                    <a {{ $user->isSuperAdmin == 1 ? 'href=/setnonsuperadmin?id='.$user->id : 'href=/setsuperadmin?id='.$user->id }} >
                                    <button class="btn btn-primary">
                                    {{ $user->isSuperAdmin ? 'Hilangkan Akses' : 'Jadikan' }} Super Admin
                                    </button>
                                    </a>
                                @endif
                                </td>
                            </tr>
                            @endif
                            @endforeach
                            <tr>
                                <td colspan="10" class="punyaku">
                                    Jumlah Data : {{ $users->total() }} 
                                    {{ $users->links('pages.pagination.custom') }}
                                </td>
                            </tr>
                        </table>  
                    </div>
                </div>
            </div>
        </div>
        </div>
        
        <!-- Modal -->
        <style>
            .vertical-alignment-helper {
            display:table;
            height: 100%;
            width: 100%;
            pointer-events:none;}

            .vertical-align-center {
            /* To center vertically */
            display: table-cell;
            vertical-align: middle;
            pointer-events:none;}
            .modal-content {
            /* Bootstrap sets the size of the modal in the modal-dialog class, we need to inherit it */
            width:inherit;
            max-width:inherit; /* For Bootstrap 4 - to avoid the modal window stretching 
            full width */
            height:inherit;
            /* To center horizontally */
            margin: 0 auto;
            pointer-events:all;}
        </style>
    @endif
  </section>

<script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
    sidebar.classList.toggle("active");
    if(sidebar.classList.contains("active")){
    sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
    }else
    sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
</script>

 <style>
     /* Googlefont Poppins CDN Link */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    }
    .sidebar{
    position: fixed;
    height: 100%;
    width: 240px;
    background: linear-gradient(45deg, black, #739f07);
    transition: all 0.5s ease;
    }
    .sidebar.active{
    width: 60px;
    }
    .sidebar .logo-details{
    height: 80px;
    display: flex;
    align-items: center;
    }
    .sidebar .logo-details i{
    font-size: 28px;
    font-weight: 500;
    color: #fff;
    min-width: 60px;
    text-align: center
    }
    .sidebar .logo-details .logo_name{
    color: #fff;
    font-size: 24px;
    font-weight: 500;
    }
    .sidebar .nav-links{
    margin-top: 10px;
    }
    .sidebar .nav-links li{
    position: relative;
    list-style: none;
    height: 50px;
    }
    .sidebar .nav-links li a{
    height: 100%;
    width: 100%;
    display: flex;
    align-items: center;
    text-decoration: none;
    transition: all 0.4s ease;
    }
    .sidebar .nav-links li a.active{
    background: #344708;
    }
    .sidebar .nav-links li a:hover{
    background: #344708;
    }
    .sidebar .nav-links li i{
    min-width: 60px;
    text-align: center;
    font-size: 18px;
    color: #fff;
    }
    .sidebar .nav-links li a .links_name{
    color: #fff;
    font-size: 15px;
    font-weight: 400;
    white-space: nowrap;
    }
    .sidebar .nav-links .log_out{
    position: absolute;
    bottom: 0;
    width: 100%;
    }
    .home-section{
    position: relative;
    background: #f5f5f5;
    min-height: 100vh;
    width: calc(100% - 240px);
    left: 240px;
    transition: all 0.5s ease;
    }
    .sidebar.active ~ .home-section{
    width: calc(100% - 60px);
    left: 60px;
    }
    .home-section nav{
    display: flex;
    justify-content: space-between;
    height: 80px;
    background: #fff;
    display: flex;
    align-items: center;
    position: fixed;
    width: calc(100% - 240px);
    left: 240px;
    z-index: 100;
    padding: 0 20px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    transition: all 0.5s ease;
    }
    .sidebar.active ~ .home-section nav{
    left: 60px;
    width: calc(100% - 60px);
    }
    .home-section nav .sidebar-button{
    display: flex;
    align-items: center;
    font-size: 24px;
    font-weight: 500;
    }
    nav .sidebar-button i{
    font-size: 35px;
    margin-right: 10px;
    }
    .home-section nav .search-box{
    position: relative;
    height: 50px;
    max-width: 550px;
    width: 100%;
    margin: 0 20px;
    }
    nav .search-box input{
    height: 100%;
    width: 100%;
    outline: none;
    background: #F5F6FA;
    border: 2px solid #EFEEF1;
    border-radius: 6px;
    font-size: 18px;
    padding: 0 15px;
    }
    nav .search-box .bx-search{
    position: absolute;
    height: 40px;
    width: 40px;
    background: #2697FF;
    right: 5px;
    top: 50%;
    transform: translateY(-50%);
    border-radius: 4px;
    line-height: 40px;
    text-align: center;
    color: #fff;
    font-size: 22px;
    transition: all 0.4 ease;
    }
    .home-section nav .profile-details{
    display: flex;
    align-items: center;
    background: #F5F6FA;
    border: 2px solid #EFEEF1;
    border-radius: 6px;
    height: 50px;
    min-width: 190px;
    padding: 0 15px 0 2px;
    }
    nav .profile-details img{
    height: 40px;
    width: 40px;
    border-radius: 6px;
    object-fit: cover;
    }
    nav .profile-details .admin_name{
    font-size: 15px;
    font-weight: 500;
    color: #333;
    margin: 0 10px;
    white-space: nowrap;
    }
    nav .profile-details i{
    font-size: 25px;
    color: #333;
    }
    .home-section .home-content{
    position: relative;
    padding-top: 104px;
    }
    .home-content .overview-boxes{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    padding: 0 20px;
    margin-bottom: 26px;
    }
    .overview-boxes .box{
    display: flex;
    align-items: center;
    justify-content: center;
    width: calc(100% / 4 - 15px);
    background: #fff;
    padding: 15px 14px;
    border-radius: 12px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
    }
    .overview-boxes .box-topic{
    font-size: 20px;
    font-weight: 500;
    }
    .home-content .box .number{
    display: inline-block;
    font-size: 35px;
    margin-top: -6px;
    font-weight: 500;
    }
    .home-content .box .indicator{
    display: flex;
    align-items: center;
    }
    .home-content .box .indicator i{
    height: 20px;
    width: 20px;
    background: #8FDACB;
    line-height: 20px;
    text-align: center;
    border-radius: 50%;
    color: #fff;
    font-size: 20px;
    margin-right: 5px;
    }
    .box .indicator i.down{
    background: #e87d88;
    }
    .home-content .box .indicator .text{
    font-size: 12px;
    }
    .home-content .box .cart{
    display: inline-block;
    font-size: 32px;
    height: 50px;
    width: 50px;
    background: #cce5ff;
    line-height: 50px;
    text-align: center;
    color: #66b0ff;
    border-radius: 12px;
    margin: -15px 0 0 6px;
    }
    .home-content .box .cart.two{
    color: #2BD47D;
    background: #C0F2D8;
    }
    .home-content .box .cart.three{
    color: #ffc233;
    background: #ffe8b3;
    }
    .home-content .box .cart.four{
    color: #e05260;
    background: #f7d4d7;
    }
    .home-content .total-order{
    font-size: 20px;
    font-weight: 500;
    }
    .home-content .sales-boxes{
    display: flex;
    justify-content: space-between;
    /* padding: 0 20px; */
    }

    /* left box */
    .home-content .sales-boxes .recent-sales{
    width: 65%;
    background: #fff;
    padding: 20px 30px;
    margin: 0 20px;
    border-radius: 12px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }
    .home-content .sales-boxes .sales-details{
    display: flex;
    align-items: center;
    justify-content: space-between;
    }
    .sales-boxes .box .title{
    font-size: 24px;
    font-weight: 500;
    /* margin-bottom: 10px; */
    }
    .sales-boxes .sales-details li.topic{
    font-size: 20px;
    font-weight: 500;
    }
    .sales-boxes .sales-details li{
    list-style: none;
    margin: 8px 0;
    }
    .sales-boxes .sales-details li a{
    font-size: 18px;
    color: #333;
    font-size: 400;
    text-decoration: none;
    }
    .sales-boxes .box .button{
    width: 100%;
    display: flex;
    justify-content: flex-end;
    }
    .sales-boxes .box .button a{
    color: #fff;
    background: #739f07;
    padding: 4px 12px;
    font-size: 15px;
    font-weight: 400;
    border-radius: 4px;
    text-decoration: none;
    transition: all 0.3s ease;
    }
    .sales-boxes .box .button a:hover{
    background:  #0d3073;
    }

    /* Right box */
    .home-content .sales-boxes .top-sales{
    width: 35%;
    background: #fff;
    padding: 20px 30px;
    margin: 0 20px 0 0;
    border-radius: 12px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }
    .sales-boxes .top-sales li{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin: 10px 0;
    }
    .sales-boxes .top-sales li a img{
    height: 40px;
    width: 40px;
    object-fit: cover;
    border-radius: 12px;
    margin-right: 10px;
    background: #333;
    }
    .sales-boxes .top-sales li a{
    display: flex;
    align-items: center;
    text-decoration: none;
    }
    .sales-boxes .top-sales li .product,
    .price{
    font-size: 17px;
    font-weight: 400;
    color: #333;
    }
    /* Responsive Media Query */
    @media (max-width: 1240px) {
    .sidebar{
        width: 60px;
    }
    .sidebar.active{
        width: 220px;
    }
    .home-section{
        width: calc(100% - 60px);
        left: 60px;
    }
    .sidebar.active ~ .home-section{
        /* width: calc(100% - 220px); */
        overflow: hidden;
        left: 220px;
    }
    .home-section nav{
        width: calc(100% - 60px);
        left: 60px;
    }
    .sidebar.active ~ .home-section nav{
        width: calc(100% - 220px);
        left: 220px;
    }
    }
    @media (max-width: 1150px) {
    .home-content .sales-boxes{
        flex-direction: column;
    }
    .home-content .sales-boxes .box{
        width: 100%;
        overflow-x: scroll;
        margin-bottom: 30px;
    }
    .home-content .sales-boxes .top-sales{
        margin: 0;
    }
    }
    @media (max-width: 1000px) {
    .overview-boxes .box{
        width: calc(100% / 2 - 15px);
        margin-bottom: 15px;
    }
    }
    @media (max-width: 700px) {
    nav .sidebar-button .dashboard,
    nav .profile-details .admin_name,
    nav .profile-details i{
        display: none;
    }
    .home-section nav .profile-details{
        height: 50px;
        min-width: 40px;
    }
    .home-content .sales-boxes .sales-details{
        width: 560px;
    }
    }
    @media (max-width: 550px) {
    .overview-boxes .box{
        width: 100%;
        margin-bottom: 15px;
    }
    .sidebar.active ~ .home-section nav .profile-details{
        display: none;
    }
    }
    @media (max-width: 400px) {
    .sidebar{
        width: 0;
    }
    .sidebar.active{
        width: 60px;
    }
    .home-section{
        width: 100%;
        left: 0;
    }
    .sidebar.active ~ .home-section{
        left: 60px;
        width: calc(100% - 60px);
    }
    .home-section nav{
        width: 100%;
        left: 0;
    }
    .sidebar.active ~ .home-section nav{
        left: 60px;
        width: calc(100% - 60px);
    }
    }
    .table-bordered {
    border: 1px solid #dee2e6;
    text-align: center;
    }

    .table-bordered th,
    .table-bordered td {
    border: 1px solid #dee2e6;
    }

    .table-bordered thead th,
    .table-bordered thead td {
    border-bottom-width: 2px;
    }
    .table-responsive {
        width: 100%;
    }
    .table-responsive table{
        width: 100%;
    }
 </style>
</body>
</html>