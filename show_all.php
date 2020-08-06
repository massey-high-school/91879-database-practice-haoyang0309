<?php include "head_nav.php";

$showall_sql="SELECT *
FROM `L1_prac_book_reviews`
ORDER BY `L1_prac_book_reviews`.`Title` ASC
LIMIT 0 , 30";
$showall_query=mysqli_query($dbconnect, $showall_sql);
$showall_rs=mysqli_fetch_assoc($showall_query);
$count=mysqli_num_rows($showall_query);


?>
        
<div class="box main">
    
    <h2>All Items</h2>
    
    <!-- Results go here -->
    <div class="results">
        
        <p>Title: <span class="sub_heading">title holder</span></p>
        
        <p>Author: <span class="sub_heading">author holder</span></p>
        
        <p>Genre: <span class="sub_heading">genre holder</span></p>
        
        <p>Rating: <span class="sub_heading">rating holder</span></p>
        
        <p><span class="sub_heading">Review / Response</span></p>
        
        <p>
            Review Placeholder
        
        </p>

    
    </div>



</div>    <!-- / main -->
        

<?php
    include "bottombit.php";
?>
