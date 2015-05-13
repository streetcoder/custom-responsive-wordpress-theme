<div class="check-rates-widget">
    <h1>CHECK RATES</h1>
    <section>
        <form action="<?php bloginfo('url'); ?>/residential/plans-page/" method="post">
      <span>
      <input type="text" id="Zip" required Name="Zip" placeholder="Enter Your Zip Code"/>
      </span>
            <br>
            <input type="radio" style="width:20px; text-align:left;" name="Utype" checked value="EL"> Electric <br>
            <input type="radio" style="width:20px" name="Utype" value="GAS"> Gas <br>

            <h3>Residential</h3>
            <button type="submit">GO</button>
        </form>
    </section>
    <div class="small-big">
        <small>Customer Service</small>
        <big>800-587-1709</big>
    </div>

</div>

<?php dynamic_sidebar('sidebar-primary'); ?>
