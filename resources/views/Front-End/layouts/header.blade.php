<nav class="navbar">
    <div class="nav-wrapper">
        <img src="{{ asset('assets/images/logo.PNG ') }}" class="brand-img" alt="">
        <input type="text" class="search-box" placeholder="Tìm kiếm">
        <div class="nav-items">
            <img src="{{ asset('assets/images/home.PNG') }}" class="icon" alt="">
            <img src="{{ asset('assets/images/messenger.PNG') }}" class="icon" alt="">
            <img src="{{ asset('assets/images/add.PNG ') }}" class="icon" alt="">
            <img src="{{ asset('assets/images/explore.PNG') }}" class="icon" alt="">
            <img src="{{ asset('assets/images/like.PNG ') }}" class="icon" alt="">
                <img src="{{ asset('assets/images/no_IMG.jpg ') }}" class="icon dropdown-toggle dropdown"
                    data-bs-toggle="dropdown" alt="">
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#"><i class="bi bi-person-circle"></i>Trang cá nhân</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-bookmark"></i>Đã lưu</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-gear-wide"></i>Cài đặt</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-arrow-repeat"></i>Chuyển Tài khoản</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Đăng xuất</a></li>
                </ul>
            <div class="icon user-profile"></div>
        </div>
    </div>
</nav>
<style>
.dropdown-menu[data-bs-popper] {
    top: 100%;
    left: 85px;
    margin-top: 1rem;
    width: 209px;
    padding: 10px;
    height: 210px;
}
.dropdown-menu .dropdown-item{
    padding: 10px;
}
.dropdown-menu .dropdown-item i{
    margin-right: 10px;
}
</style>

