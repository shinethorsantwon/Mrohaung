<?php
/**
 * Auto-deployment script for Hostinger
 */

echo "<h2>Mrohaung API Deployment</h2>";
echo "Updating...<br>";
echo "<pre>";

// Pull the latest code from GitHub
$gitOutput = shell_exec("git pull origin main 2>&1");
echo "<b>Git Pull:</b>\n" . $gitOutput . "\n";

// Run prisma generate if needed (optional but good practice)
// $prismaOutput = shell_exec("npx prisma generate 2>&1");
// echo "<b>Prisma Generate:</b>\n" . $prismaOutput . "\n";

// Restart the PM2 process
$pm2Output = shell_exec("npx pm2 restart api-server 2>&1");
echo "<b>PM2 Restart:</b>\n" . $pm2Output . "\n";

echo "</pre>";
echo "<h3>Deployment Complete!</h3>";
?>
