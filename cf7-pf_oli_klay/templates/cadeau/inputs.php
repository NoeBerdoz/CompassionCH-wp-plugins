<div class="row">
    <div class="small-4 columns">
        <label class="text-left middle"><?php _e('Mein Betrag in CHF', 'donation-form'); ?></label>
    </div>
    <div class="small-8 columns">
        <input type="text" placeholder="<?php _e('bitte nur Zahlen', 'donation-form'); ?>"required data-msg="<?php _e('Betrag erforderlich', 'donation-form'); ?>" class="input-field" name="wert" value="<?php echo (isset($session_data['wert'])) ? $session_data['wert'] : ''; ?>">
    </div>
</div>
<div class="row">
    <div class="small-4 columns">
        <label class="text-left middle"><?php _e('Anlass', 'donation-form'); ?></label>
    </div>
    <div class="small-8 columns">
        <div class="select-wrapper">
            <select name="fonds" id="fonds" class="input-field">
                <option value="gift_birthday" <?php echo (isset($session_data['fonds']) && $session_data['fonds'] == "gift_birthday") ? 'selected' : '' ?>><?php _e('Geburtstagsgeschenk', 'donation-form'); ?></option>
                <option value="gift_family" <?php echo (isset($session_data['fonds']) && $session_data['fonds'] == "gift_family") ? 'selected' : '' ?>><?php _e('Familiengeschenk', 'donation-form'); ?></option>
                <option value="gift_gen" <?php echo (isset($session_data['fonds']) && $session_data['fonds'] == "gift_gen") ? 'selected' : '' ?>><?php _e('Allgemeines Geschenk', 'donation-form'); ?></option>
                <option value="gift_project" <?php echo (isset($session_data['fonds']) && $session_data['fonds'] == "gift_project") ? 'selected' : '' ?>><?php _e('Geschenk ans Kinderzentrum', 'donation-form'); ?></option>
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="small-4 columns">
        <label class="text-left middle"><?php _e('Patenkindnummer', 'donation-form'); ?></label>
    </div>
    <div class="small-8 columns">
        <input type="text" required data-msg="<?php _e('Patenkindnummer erforderlich', 'donation-form'); ?>" placeholder="<?php _e('ie : BO012301234', 'donation-form'); ?>" class="input-field" id="refenfant" name="refenfant" value="<?php echo (isset($session_data['refenfant'])) ? $session_data['refenfant'] : ''; ?>">
    </div>
</div>