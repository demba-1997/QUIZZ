<div class="container">
    <div class="row">
        <div class="col-md-4"><?php require_once(ROUTE_DIR . "vue/inc/menu.html.php"); ?>
        </div>
        <div class="col-md-8">
            <div class="manga">
                <div class="progress">
                    <label for="file">DEMBA:</label><br/><br/>
                    <progress class="pro" id="file" max="100" value="90"> 70% </progress><br/><br/>
                    <label for="file">ISSA:</label><br/><br/>
                    <progress class="pro" id="file" max="100" value="30"> 70% </progress><br/><br/>
                    <label for="file">MOUSSA:</label><br/><br/>
                    <progress clclass="pro"ass="pro" id="file" max="100" value="70"> 70% </progress><br/><br/>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .pro {
        width:100%;
        height:20%;
    }
     .manga{
        position: absolute;
        left: 49%;
        top: 42%;
        border-style: solid;
        border-color: red;
        background-color: lightgrey;
    }
    @media screen and (max-width: 641px) {
  .manga {
   /*  display: block; */
    float: left;
    margin-top: 115%;
    margin-left: -39%;
  }
}
</style>