<style>

    .bg-light-blue {
    background-color: #f5f8fd !important;
}
.dashboard-card table td {
    font-size: 14px !important;
    color: #585858;
    white-space:nowrap;
}
.text-transform-capitalize{
    text-transform:capitalize;
}
.footer-btn-box {
    padding: 15px 0;
    min-height: 40px;
    /* box-shadow: 0px 2px 1px 0px; */
    background: #f6f9ff!important;
}
  .footer-btn-box .btn-yellow {
            margin-right: 7px;
        }
        
        .widgets-wrapper-box .col{
            margin:5px;
        }
        .mb-10 {
    margin-bottom: 10px;
}
</style>
    <aside id="sidebar" class="sidebar scrollbar-style">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url("admin/dashboard") }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url("admin/manage-gift-card") }}">
                    <i class="bi bi-fingerprint"></i>
                    <span>Manage Gift Card</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url("admin/roles") }}">
                    <i class="bi bi-shield-check"></i>
                    <span>Manage User Role</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url("admin/plans") }}">
                    <i class="bi bi-shield-check"></i>
                    <span>Manage User Plan</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url("admin/users") }}">
                    <i class="bi bi-shield-check"></i>
                    <span>Manage Users</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url("admin/manage-chat") }}">
                   <i class="bi bi-cart4"></i>
                    <span>Manage Chat</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url("admin/manage-order") }}">
                   <i class="bi bi-cart4"></i>
                    <span>Manage Orders</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url("admin/currency-use-case") }}">
                    <i class="bi bi-shield-check"></i>
                    <span>Currency Use Case</span>
                </a>
            </li>
        </ul>
    </aside>
<script type="text/javascript">
        const currentLocation=location.href;
        const menuItem=document.querySelectorAll('a');
        const menuLength=menuItem.length
        for(let i=0;i<menuLength;i++){
        	if(menuItem[i].href===currentLocation){
        		menuItem[i].className="active"
        	}
        }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
   $(document).ready(function(){
     $("#mobile-sidebar-show").click(function(){
       $("#sidebar").toggleClass("show");
     });
   });
</script>