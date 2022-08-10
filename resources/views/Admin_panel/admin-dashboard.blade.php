@extends("admin_panel/app")
@section("admin")

<section class="dashboard-wrap mtb-40">
    	<div class="container">
            <div class="body-content">
        		<div class="row">
        			<div class="col-md-3">
                    @include("admin_panel/layouts/sidebar")
                        <div class="dash-left">
                            <ul>
                                <li class="active"><a href="dashboard.html" class="active">Dashboard</a></li>
                                <li><a href="admin-blog-list.html">Blogs</a></li>
                                <li><a href="#">Categories</a></li>
                                <li><a href="#">Pages</a></li>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </div>   
                    </div>
                    <div class="col-md-9">
                        <div class="dash-right">
                            <h1>Dashboard</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        </div>   
                    </div>
        		</div>
            </div>
    	</div>
    </section>
    @endSection()
