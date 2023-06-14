<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>McPio Pet Health Cover | Home</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Eduardo Dos Santos Pio">
    <meta name="description" content="PHP Assignment 1">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php" title="Go to the Home page">Home</a></li>
                <li><a href="view.php" title="View the Data Inserted">View</a></li>
                <li><a href="about.php" title="Learn more about us">About</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form method="post">
            <div class='signup-container'>
                <div class='left-container'>
                <h2>Make sure your pet receives the best healthcare!</h2>
                    <p>Choose McPio Pet Health Cover!</p>
                    <p>Get a quote today.</p>
                    <div class='puppy'>
                        <img src='img/puppy.png' alt="puppy">
                    </div>
                </div>
                <div class='right-container'>
                    <div class='set'>
                        <div class='pets-name'>
                            <label for='pet_name'>Name</label>
                            <input type="text" name="pet_name" id='pet_name' placeholder="Pet's name">
                        </div>
                    
                    <div class='pets-photo'>
                        <label for='pet-photo'>Upload a photo</label>
                        <input type="file" name="pet-photo" id='pet-photo'>
                    </div>
                    </div>
                    <div class='set'>
                        <div class='pets-breed'>
                            <label for='pet_breed'>Breed</label>
                            <input id='pet_breed' name="pet_breed" placeholder="Pet's breed" type='text'>
                        </div>
                        <div class='pets-birthday'>
                            <label for='pet_dob'>Day of Birth</label>
                            <input id='pet_dob' placeholder='YYYY-MM-DD' type='text' name="pet_dob">
                        </div>
                    </div>
                    <div class='set'>
                        <div class='pets-gender'>
                            <label for='pet_gender_female'>Gender</label>
                            <div class='radio-container'>
                                <input checked='' id='pet_gender_female' name='pet_gender' type='radio' value='female'>
                                <label for='pet_gender_female'>Female</label>
                                <input id='pet_gender_male' name='pet_gender' type='radio' value='male'>
                                <label for='pet_gender_male'>Male</label>
                            </div>
                        </div>
                        <div class='pets-spayed-neutered'>
                            <label for='pet_spayed'>Spayed or Neutered</label>
                            <div class='radio-container'>
                                <input checked='' id='pet_spayed' name='spayed_neutered' type='radio' value='spayed'>
                                <label for='pet_spayed'>Spayed</label>
                                <input id='pet_neutered' name='spayed_neutered' type='radio' value='neutered'>
                                <label for='pet_neutered'>Neutered</label>
                            </div>
                        </div>
                    </div>
                    <div class='pets-weight'>
                        <label for='pets-weight'>Weight</label>
                        <div class='radio-container'>
                            <input checked='' id='pet_weight_0_10' name='pet_weight' type='radio' value='0-10'>
                            <label for='pet_weight_0_10'>0-10 kg</label>
                            <input id='pet_weight_11_20' name='pet_weight' type='radio' value='11-20'>
                            <label for='pet_weight_11_20'>11-20 kg</label>
                            <input id='pet_weight_21_30' name='pet_weight' type='radio' value='21-30'>
                            <label for='pet_weight_21_30'>21-30 kg</label>
                            <input id='pet_weight_31_plus' name='pet_weight' type='radio' value='31+'>
                            <label for='pet_weight_31_plus'>31+ kg</label>
                        </div>
                    </div>
                    <div class='set'>
                        <button id='submit' type="submit" value="Submit">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </main>
    <footer>
        <p>&copy; 2023 McPio Pet Health Cover</p>
    </footer>


    <?php
    require_once('database.php');
    if (isset($_POST) & !empty($_POST)) {
        $pet_name = $_POST['pet_name'];
        $pet_breed = $_POST['pet_breed'];
        $pet_gender = $_POST['pet_gender'];
        $spayed_neutered = $_POST['spayed_neutered'];
        $pet_dob = $_POST['pet_dob'];
        $pet_weight = $_POST['pet_weight'];
        $res   = $database->create($pet_name, $pet_breed, $pet_gender, $spayed_neutered, $pet_dob, $pet_weight);
        if ($res) {
            echo "<p>The data was successfully inserted!</p>";
        } else {
            echo "<p>Failed to insert data</p>";
        }
    }
    ?>
</body>

</html>