<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="container">
    <div class="jumbotron">
    <form method="GET">
    <h1 class="display-4">Calculate prime factors</h1>
    <p class="lead">Find out of a number is a Prime number, and if it not what its prime factors are.</p>
    <hr class="my-4">
    <div class="form-group">
        <label for="number">Ooh exciting! Is it a prime number?</label>
        <input name="number" type="number" class="form-control" id="number" placeholder="Type a number.. any number">
    </div>
    <?php if(isset($number)){?>
        <div class="alert alert-primary" role="alert">
            <?php echo $responseString;?>
        </div>
    <?php } ;?>
    <p class="lead">
        <button class="btn btn-primary btn-lg" href="#" role="button">Find Prime factors</button>
    </p>
    </form>
    </div>
</div>