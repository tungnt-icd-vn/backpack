<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="nav-icon la la-dashboard"></i> <span>Tổng Quan</span></a></li>

<li class="nav-title">Quản lý CRM</li>
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-newspaper-o"></i> News</a>
    <ul class="nav-dropdown-items">
      <li class="nav-item"><a class="nav-link" href="{{ backpack_url('article') }}"><i class="nav-icon la la-newspaper-o"></i> <span>Articles</span></a></li>
      <li class="nav-item"><a class="nav-link" href="{{ backpack_url('category') }}"><i class="nav-icon la la-list"></i> <span>Categories</span></a></li>
      <li class="nav-item"><a class="nav-link" href="{{ backpack_url('tag') }}"><i class="nav-icon la la-tag"></i> <span>Tags</span></a></li>
    </ul>
</li>

{{-- <li class="nav-item"><a class="nav-link" href="{{ backpack_url('page') }}"><i class="nav-icon la la-file-o"></i> <span>Pages</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('menu-item') }}"><i class="nav-icon la la-list"></i> <span>Menu</span></a></li> --}}

<!-- Users, Roles Permissions -->
<li class="nav-item nav-dropdown">
  <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-group"></i> Authentication</a>
  <ul class="nav-dropdown-items">
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>Users</span></a></li>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-group"></i> <span>Roles</span></a></li>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>Permissions</span></a></li>
  </ul>
</li>

<!-- <li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-cogs"></i> Advanced</a>
    <ul class="nav-dropdown-items">
      <li class="nav-item"><a class="nav-link" href="{{ backpack_url('elfinder') }}"><i class="nav-icon la la-files-o"></i> <span>File manager</span></a></li>
      <li class="nav-item"><a class="nav-link" href="{{ backpack_url('backup') }}"><i class="nav-icon la la-hdd-o"></i> <span>Backups</span></a></li>
      <li class="nav-item"><a class="nav-link" href="{{ backpack_url('log') }}"><i class="nav-icon la la-terminal"></i> <span>Logs</span></a></li>
      <li class="nav-item"><a class="nav-link" href="{{ backpack_url('setting') }}"><i class="nav-icon la la-cog"></i> <span>Settings</span></a></li>
    </ul>
</li> -->
/
{{-- <li class="nav-title">Demo Entities</li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('monster') }}"><i class="nav-icon la la-optin-monster"></i> <span>Monsters</span></a></li> --}}
<!-- <li class="nav-item"><a class="nav-link" href="{{ backpack_url('icon') }}"><i class="nav-icon la la-info-circle"></i> <span>Icons</span></a></li> -->
{{-- <li class="nav-item"><a class="nav-link" href="{{ backpack_url('product') }}"><i class="nav-icon la la-shopping-cart"></i> <span>Products</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('fluent-monster') }}"><i class="nav-icon la la-pastafarianism"></i> <span>Fluent Monsters</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dummy') }}"><i class="nav-icon la la-poo"></i> <span>Dummies</span></a></li> --}}
<li class="nav-title">Cấu hình trang trại<img src="" alt="" sizes="" srcset=""></li>
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-sliders"></i> Khởi tạo</a>
    <ul class="nav-dropdown-items">
      <li class='nav-item'><a class='nav-link' href='{{ backpack_url('farms') }}'><i class='nav-icon la la-home'></i> Nông trại</a></li>
      <li class='nav-item'><a class='nav-link' href='{{ backpack_url('zones') }}'><i class='nav-icon la la-cubes'></i> Khu</a></li>
      <li class='nav-item'><a class='nav-link' href='{{ backpack_url('beds') }}'><i class='nav-icon la la-windows'></i> Luống</a></li>
      <li class='nav-item'><a class='nav-link' href='{{ backpack_url('suppliers') }}'><i class='nav-icon la la-institution'></i>Nhà cung cấp</a></li>
    </ul>
</li>
<li class="nav-item nav-dropdown">
  <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-legal"></i> Quản lý vật tư</a>
  <ul class="nav-dropdown-items">
      <li class='nav-item'><a class='nav-link' href='{{ backpack_url('medicines') }}'><i class='nav-icon la la-flask'></i>Thuốc</a></li>
      <li class='nav-item'><a class='nav-link' href='{{ backpack_url('fertilizers') }}'><i class='nav-icon la la-ge'></i>phân bón</a></li>
      <li class='nav-item'><a class='nav-link' href='{{ backpack_url('trees') }}'><i class='nav-icon la la-leaf'></i>giống cây</a></li>
  </ul>
</li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('works') }}'><i class='nav-icon la la-pied-piper-alt'></i> Quản Lý Công Việc </a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('pests') }}'><i class='nav-icon la la-exclamation-triangle'></i> Quản Lý Sâu Bệnh</a></li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('categories_products') }}'><i class='nav-icon la la-pagelines'></i> Quản Lý Cây Trồng</a></li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('product_history') }}'><i class='nav-icon la la-calendar-check-o'></i> Nhật ký Sinh Trưởng</a></li>