includes folder, only for core files
# Ready ?
- loop?  100,0 % ready
- upload? 99,0 % ready
- functions 100% work but not all functions present
- img optimizer - missing
- security (keep dev) 


note: for me: : (check)

    // Escapen strings for secure SQL-query
    function escape_string($string) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT :string");
    $stmt->bindParam(':string', $string, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetchColumn();
    }

