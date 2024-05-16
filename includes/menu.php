<header class="menu-bar">
    <table>
        <tr>
            <td>
                Blog
            </td>
            <ul>
                <li>
                    <a href="/blog ADN/index.php" class=" <?= (!isset($_GET["page"]) ? "menu-active" : ""); ?>">home</a>
                </li>

                <li>
                    <a href="/blog ADN/pages/articles.php?page=articles" class=" <?= (isset($_GET["page"]) && $_GET["page"] == "archives" ? "menu-active" : ""); ?> ">Articles</a>
                </li>

                <li>
                    <a href="/blog ADN/pages/inscription.php?page=inscription" class=" <?= (isset($_GET["page"]) && $_GET["page"] == "inscription" ? "menu-active" : ""); ?>">Inscription</a>
                </li>
                
                <li>
                    <a href="/blog ADN/pages/connexion.php?page=connexion" class=" <?= (isset($_GET["page"]) && $_GET["page"] == "connexion" ? "menu-active" : ""); ?>">Connexion</a>
                </li>
            </ul>
        </tr>
    </table>
</header>