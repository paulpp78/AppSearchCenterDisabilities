<!-- erreur.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erreur</title>
</head>
<body>

<script>
    alert("<?php echo htmlspecialchars($_GET['message']); ?>");
    window.location.href = "../authentification.php";
</script>

</body>
</html>
