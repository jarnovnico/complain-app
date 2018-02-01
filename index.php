    <?php
        include 'dbh.php';
        include 'header.php';
        include 'includes/message.inc.php';
    ?>
    <main>
        <section class="message-wall-wrapper">
            <?php
                echo "<div class='message-box-wrapper'>";
                echo "<form class='comment-box' method='POST' action='".setMessages($conn)."'>
                    <textarea class='comment-box-text' name='message' placeholder='Type hier uw klacht...'></textarea><br>
                    <button type='submit' name='submitMessage'>Plaats bericht</button>
                </form>";
                echo "</div>";
            ?>
            <div class="digital-screens-container">
                <?php 
                    getMessages($conn);
                ?>
            </div>
        </section>
    </main>
</body>
</html>