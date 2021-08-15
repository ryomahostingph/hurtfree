<?php 
if (!defined('FLUX_ROOT')) exit;
include $this->themePath('src/status.php', true);
?>

<?php foreach ($serverStatus as $privServerName => $gameServers): ?>
<?php foreach ($gameServers as $serverName => $gameServer): ?>
<nav class="level">
	<div class="level-item">
			<?php 
			if ( $loginServerUp ) {
				$hurtLogin = "Login Server is Working Good!";
				$hurtLoginIcon ="fas fa-cog fa-spin";
				$hurtLoginText = "has-text-success";
			} else {
				$hurtLogin = "Login Server is Currently Offline!";
				$hurtLoginIcon ="fas fa-cog";
				$hurtLoginText = "has-text-danger";
			}
			?>
			<span id="icon-status"
			class="tooltip"
			data-position="bottom"
			data-delay="50"
			data-tooltip="<?php echo $hurtLogin ?>">
				<span class="<?php echo $hurtLoginText ?>"><i class="<?php echo $hurtLoginIcon ?>"></i></span>
				<span class="<?php echo $hurtLoginText ?>">
					LOGIN SERVER
				</span>
			</span>
	</div>
	<div class="level-item">
		<?php 
		if ( $loginServerUp ) {
			$hurtChar = "Char Server is Working Good!";
			$hurtCharIcon ="fas fa-cog fa-spin";
			$hurtCharText = "has-text-success";
		} else {
			$hurtChar= "Char Server is Currently Offline!";
			$hurtCharIcon ="fas fa-cog";
			$hurtCharText = "has-text-danger";
		}
		?>
		<span id="icon-status" class="tooltip"
		data-position="bottom"
		data-delay="50"
		data-tooltip="<?php echo $hurtChar ?>">
			<span class="<?php echo $hurtCharText ?>"><i class="<?php echo $hurtCharIcon ?>"></i></span>
			<span class="<?php echo $hurtCharText ?>">
				CHAR SERVER
			</span>
		</span>
	</div>
	<div class="level-item">
		<?php 
		if ( $loginServerUp ) {
			$hurtMap = "Map Server is Working Good!";
			$hurtMapIcon ="fas fa-cog fa-spin";
			$hurtMapText = "has-text-success";
		} else {
			$hurtMap= "Map Server is Currently Offline!";
			$hurtMapIcon ="fas fa-cog";
			$hurtMapText = "has-text-danger";
		}
		?>
		<span id="icon-status" class="tooltip"
		data-position="bottom"
		data-delay="50"
		data-tooltip="<?php echo $hurtMap ?>">
			<span class="<?php echo $hurtMapText ?>"><i class="<?php echo $hurtMapIcon ?>"></i></span>
			<span class="<?php echo $hurtMapText ?>">
				MAP SERVER
			</span>
		</span>
	</div>
	<!-- woe -->
	<div class="level-item">
		<?php 
		if( $gameServer['woeStatus']==1){
			$hurtWoe = "JOIN WOE NOW!!!";
			$hurtWoeIcon ="fas fa-check-circle";
			$hurtWoeText = "has-text-success";
		} else {
			$hurtWoe= "WOE Currently Unavailable";
			$hurtWoeIcon ="fas fa-exclamation";
			$hurtWoeText = "has-text-danger";
		}
		?>
		<div id="icon-status" class="tooltip"
		data-position="bottom"
		data-delay="50"
		data-tooltip="<?php echo $hurtWoe ?>">
			<span class="<?php echo $hurtWoeText ?>"><i class="<?php echo $hurtWoeIcon ?>"></i></span>
			<span class="<?php echo $hurtWoeText ?>">
				War Of Emperium
			</span>
		</div>
	</div>
	<!-- online -->
	<div class="level-item">
		<span class="has-text-white">
			<span class="counter"><?php echo $gameServer['playersOnline'] ?></span>
			Player Online Now
		</span>
	</div>
	
	<?php if(Flux::config('EnablePeakDisplay')): ?>
	<!-- peak -->
	<div class="level-item">
		<span class="has-text-white">
			<span class="counter"><?php echo $gameServer['playersPeak'] ?></span>
			Player Peak
		</span>
	</div>
	<?php endif ?>
	<div class="level-item">
		<span class="has-text-white">
			<span class="counter"><?php echo number_format($infoStats['accountsStats']) ?></span>
			Registered Account
		</span>
	</div>
</nav>

<?php endforeach ?>
<?php endforeach ?>