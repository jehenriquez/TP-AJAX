<?php 
include_once('../estructura/header.php');
?>

<div class="container mt-5 mb-5">
    <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active link-primary fw-bolder" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true" value="0">Home</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link link-primary fw-bolder" id="consejo1-tab" data-bs-toggle="tab" data-bs-target="#consejo1" type="button" role="tab" aria-controls="consejo1" aria-selected="false" value="1">Consejo 1</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link link-primary fw-bolder" id="consejo2-tab" data-bs-toggle="tab" data-bs-target="#consejo2" type="button" role="tab" aria-controls="consejo2" aria-selected="false" value="2">Consejo 2</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link link-primary fw-bolder" id="consejo3-tab" data-bs-toggle="tab" data-bs-target="#consejo3" type="button" role="tab" aria-controls="consejo3" aria-selected="false" value="3">Consejo 3</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">

        </div>
        <div class="tab-pane fade" id="consejo1" role="tabpanel" aria-labelledby="consejo1-tab">

        </div>
        <div class="tab-pane fade" id="consejo2" role="tabpanel" aria-labelledby="consejo2-tab">

        </div>
        <div class="tab-pane fade" id="consejo3" role="tabpanel" aria-labelledby="consejo3-tab">

        </div>
    </div>
</div>

<script src="../js/fe2.js"></script>
<?php 
include_once('../estructura/footer.php');
?>