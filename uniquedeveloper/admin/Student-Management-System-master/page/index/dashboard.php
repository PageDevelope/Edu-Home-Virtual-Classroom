
<script type="text/javascript" src="page/index/js/dashboard.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
            $(document).ready(function() {
                 $('table.display').DataTable();
            } );
        </script>

 <div class="row" style="margin-bottom: 10px;">
    <?php include 'dashboard_info.php'; ?>
</div>

    <div class="row">
    
    <script src="tool/chart_api/canvas_api.js"></script>


        <?php 
       
       if($user_permit<8){
        include "student_admit_graph.php"; 
        include "site_activity.php"; 
        
       }
        ?>

    </div>    

<link rel="stylesheet" type="text/css" href="page/index/style.css">
<style type="text/css">
    thead{
        background-color: #EFF0F2;
        border-width: 0px;
    }
    .td_list1{
        background-color: #EFF0F2;
        color: #000000;
        padding: 10px;
        font-weight: bold;
        border: 1px solid #C6C9D1;
        text-align: center;
    }
    .td_list2{
        background-color: #ffffff;
        color: #000000;
        padding: 8px;
        border: 1px solid #C6C9D1;
        text-align: center;
    }
</style>

<script type="text/javascript">
    live_site_action();
</script>