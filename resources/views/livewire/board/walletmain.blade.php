<div class="container-walletmain">
    @livewire('component.header')
   
    <div class= "main">
        @livewire('component.verticalnav', ['pageName' => 'walletmain'])
        <div class= "wallet">
            <h2> Wallet </h2>
            <div class = "balance">
                <div class="balance-text">Wallet Balance</div>
            </div>
            <div class= "table">
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Balance</th>
                        <th>Value</th>
                    </tr>
                    <tr>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                    </tr>
                </table>
            </div>
                        
        </div>
    </div>
    

</div>