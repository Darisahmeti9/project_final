<form role="search" method="get" id="searchform" class="searchform-real-madrid" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="search-wrapper">
        <label class="screen-reader-text" for="s">Search for:</label>
        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Search Real Madrid...">
        <input type="submit" id="searchsubmit" value="Search">
    </div>
</form>

<style>
/* --- Real Madrid Search Form Styling --- */
.searchform-real-madrid .search-wrapper {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin: 20px 0;
}

.searchform-real-madrid input[type="text"] {
    padding: 8px 12px;
    width: 250px;
    border: 2px solid #003399;
    border-radius: 4px;
    font-size: 1em;
}

.searchform-real-madrid input[type="text"]:focus {
    outline: none;
    border-color: #ffcc00;
}

.searchform-real-madrid input[type="submit"] {
    padding: 8px 20px;
    background-color: #003399;
    color: #ffcc00;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-weight: bold;
    transition: all 0.3s ease;
}

.searchform-real-madrid input[type="submit"]:hover {
    background-color: #ffcc00;
    color: #003399;
}
</style>
