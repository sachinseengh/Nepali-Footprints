<?php

require_once('./class/Product.class.php');

$product = new Product();

// Set product details
$product->set('name', $_POST['name']);
$product->set('price', $_POST['price']);
$product->set('desc', $_POST['desc']);
$product->set('category', $_POST['category']);
$product->set('sub_category', $_POST['sub_category']);

// Function to handle file uploads
function handleFileUpload($file, $fieldName, $product) {
    if ($file['error'] == 0) {
        // Define the allowed file types
        $allowedTypes = ['image/png', 'image/jpg', 'image/jpeg', 'image/webp'];
        $fileType = $file['type'];
        $fileSize = $file['size'];

        // Validate the file type
        if (in_array($fileType, $allowedTypes)) {
            // Validate the file size (maximum 1 MB)
            if ($fileSize <= 1024 * 1024) {
                // Generate a unique name for the file
                $uniqueName = uniqid('', true);
                $originalName = basename($file['name']);
                $imageName = $uniqueName . '-' . $originalName;

                // Move the file to the desired directory
                $targetPath = '../images/' . $imageName;
                if (move_uploaded_file($file['tmp_name'], $targetPath)) {
                    // Set the image name in the product object
                    $product->set($fieldName, $imageName);
                } else {
                    return "Failed to move uploaded file!";
                }
            } else {
                return "Error, file size exceeds 1 MB!";
            }
        } else {
            return "Invalid file type!";
        }
    } else {
        return null;
    }

    return null; // No error
}

// Handle file uploads
$imageErrors = [];
$imageErrors[] = handleFileUpload($_FILES['featured_img'], 'featured_img', $product);
$imageErrors[] = handleFileUpload($_FILES['add_img1'], 'add_img1', $product);
$imageErrors[] = handleFileUpload($_FILES['add_img2'], 'add_img2', $product);
$imageErrors[] = handleFileUpload($_FILES['add_img3'], 'add_img3', $product);

// Set product sizes
$sizes = ['s_30', 's_31', 's_32', 's_33', 's_34', 's_35', 's_36', 's_37', 's_38', 's_39', 's_40', 's_41', 's_42', 's_43', 's_44', 's_45'];
foreach ($sizes as $size) {
    $product->set($size, $_POST[$size]);
}

// Save the product
$product->Save();

// Display errors if there are any
foreach ($imageErrors as $error) {
    if ($error) {
        echo $error;
    }
}

?>
