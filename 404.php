<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 */

get_header(); ?>
    <div class="wrapper row2">
        <div id="container" class="clear">
            <!-- ####################################################################################################### -->
            <!-- ####################################################################################################### -->
            <!-- ####################################################################################################### -->
            <!-- ####################################################################################################### -->
            <section id="fof" class="clear">
                <!-- ####################################################################################################### -->
                <div class="fl_left"><img src="../assets/images/404.png" alt=""></div>
                <div class="fl_right">
                    <h1>404!</h1><br/>
                    <p>The Page You Requested Could Not Be Found On Our Server</p>
                    <p>Go back to the <a href="javascript:history.go(-1)">previous page</a> or visit our <a href="http://ticket.local/">homepage</a></p>
                    <div id="respond">
                        <form action="#" method="post">
                            <fieldset>
                                <legend>Site Search</legend>
                                <input type="text" value="Search Our Website&hellip;" onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;">
                                <input type="submit" id="submit" value="Search">
                            </fieldset>
                        </form>
                    </div>
                </div>
                <!-- ####################################################################################################### -->
            </section>
            <!-- ####################################################################################################### -->
            <!-- ####################################################################################################### -->
            <!-- ####################################################################################################### -->
            <!-- ####################################################################################################### -->
        </div>
    </div>
<?php get_footer(); ?>