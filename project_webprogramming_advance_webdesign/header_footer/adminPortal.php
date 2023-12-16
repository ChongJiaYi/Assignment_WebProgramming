<style>

        .container{
            display:flex;
            justify-content: end;
            padding-top: 30px;
            align-items: last baseline;
        }

        #all_component{
            margin-left:50px;
        }

        .admin_status{
            display:flex;
            text-align: center;
            font-size: 20px;
            align-items:first baseline;
        }

        .admin_status i{
            margin-left: 10px;
        }

        .noticication_bell{
            font-size:40px;
            margin-right: 20px;
        }

        .admin_profile_icon{
            display: flex;
            font-size: 40px;
            align-items: last baseline;
        }

        .admin_name{
            font-size: 20px;
            margin-left: 20px;
        }

        
</style>

<!--top content-->
<!--Top Component-->
    <div class="container">
        <div class="admin_status" id="all_component">
            <p>Open For Order</p>
            <i class="fa-solid fa-circle" style="color: #00ca4e;"></i>
        </div>
    
        <div class="noticication_bell" id="all_component">
            <a href=""><i class="fa-regular fa-bell" style="color: #000000;"></i></a>
        </div>
    
        <div class="admin_profile_icon" id="all_component">
            <a href=" "><i class="fa-regular fa-circle-user" style="color: #000000;"></i></a>
            <div class="admin_name">
                <h6>admin123</h6>
                <p>Store Admin</p>
            </div>
        </div>
    </div>
    <hr>

