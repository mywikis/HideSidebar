<?php
class HideSidebarHooks {
    public static function efHideSidebar( $skin, &$bar ) {
        // Hide sidebar for anonymous users
        if ( $skin->getUser()->isAnon() ) {
            $url = Title::makeTitle( NS_SPECIAL, 'UserLogin' )->getLocalUrl();
            $bar = [];
            $bar['navigation'][] = [
                'text'   => 'Login',
                'href'   => $url,
                'id'     => 'n-login',
                'active' => '',
            ];
        }

        return true;
    }
}
