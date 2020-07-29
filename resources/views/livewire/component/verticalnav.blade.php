    <div class="verticalnav">
        <div class="dashboard"  wire:click="handleRedirect('dashboard')" style={{$pageData['pageName'] == 'dashboard' ? 'background-color:red' : ''}}>
            <div><img class="dashboard-icon" src="{{URL::asset('/image/export/dashboard.png')}}" alt="dashboard"></div>
            <div class="dashboard-text">Dashboard</div>
        </div>
        <div class="wallet" wire:click="handleRedirect('walletmain')" style={{$pageData['pageName'] == 'walletmain' ? 'background-color:red' : ''}}>
            <div><img class="wallet-icon" src="{{URL::asset('/image/export/wallet.png')}}" alt="wallet"></div>
            <div class="wallet-text">Wallet</div>
            {{-- <div style="margin-left:20px; width:20px; background-color: green" wire:click.stop="handleCollapse">></div> --}}
        </div>
        {{-- {{dump($btnCollapse)}}
        <div class="wallet" wire:click="handleRedirect('merchant-order')" style={{$pageData['pageName'] == 'merchant-order' ? 'background-color:red' : ''}}>
            <div><img class="wallet-icon" src="{{URL::asset('/image/export/wallet.png')}}" alt="merchant-order"></div>
            <div class="wallet-text">Orders</div>
        </div>
        <div class="wallet" wire:click="handleRedirect('merchant-withdrawal')" style={{$pageData['pageName'] == 'merchant-withdrawal' ? 'background-color:red' : ''}}>
            <div><img class="wallet-icon" src="{{URL::asset('/image/export/wallet.png')}}" alt="merchant-withdrawal
                merchant-withdrawal"></div>
            <div class="wallet-text">Withdrawal</div>
        </div>
        <div class="wallet" wire:click="handleRedirect('merchant-referral')" style={{$pageData['pageName'] == 'merchant-referral' ? 'background-color:red' : ''}}>
            <div><img class="wallet-icon" src="{{URL::asset('/image/export/wallet.png')}}" alt="merchant-referral
                merchant-referral"></div>
            <div class="wallet-text">Referrals</div>
        </div> --}}
        <div class="account" wire:click="handleRedirect('accountmain')" style={{$pageData['pageName'] == 'accountmain' ? 'background-color:red' : ''}}>
            <div><img class="account-icon" src="{{URL::asset('/image/export/account.png')}}" alt="account"></div>
            <div class="account-text">Account</div>
        </div>
        <div class="history" wire:click="handleRedirect('history')" style={{$pageData['pageName'] == 'history' ? 'background-color:red' : ''}}>
            <div><img class="history-icon" src="{{URL::asset('/image/export/history.png')}}" alt="history"></div>
            <div class="history-text">History</div>
        </div>
        <div class="logout" wire:click="handleRedirect('logout')" style={{$pageData['pageName'] == 'logout' ? 'background-color:red' : ''}}>
            <div><img class="logout-icon" src="{{URL::asset('/image/export/logout.png')}}" alt="logout"></div>
            <div class="logout-text">Log Out</div>
        </div>
        <div class="logo-box">
            <div><img class="logo-icon" src="{{URL::asset('/image/export/logo3.png')}}" alt="logo"></div>
        </div>
    </div>
