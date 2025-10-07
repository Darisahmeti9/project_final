<?php 
if( is_active_sidebar( 'sidebar-blog' ) ):
?>
    <aside class="sidebar-real-madrid">
        <?php dynamic_sidebar( 'sidebar-blog' ); ?>
    </aside>

<style>
/* --- Real Madrid Sidebar Styling --- */
.sidebar-real-madrid {
    background-color: #f2f2f2; /* Light background for readability */
    border-left: 4px solid #003399; /* Real Madrid Blue */
    padding: 20px;
    margin: 20px 0;
    border-radius: 6px;
}

.sidebar-real-madrid .widget {
    margin-bottom: 20px;
}

.sidebar-real-madrid .widget-title {
    font-weight: bold;
    color: #003399;
    border-bottom: 2px solid #ffcc00; /* Gold accent */
    padding-bottom: 5px;
    margin-bottom: 10px;
}

.sidebar-real-madrid .widget ul {
    list-style: disc inside;
}

.sidebar-real-madrid .widget ul li {
    padding: 5px 0;
}
</style>
<?php endif; ?>
