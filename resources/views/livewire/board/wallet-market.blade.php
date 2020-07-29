<div class="container-wallet-market">
    @livewire('component.header')
   
    <div class= "main">
        @livewire('component.verticalnav', ['pageName' => 'wallet-market'])
        <div class= "market">
            <h2> Wallet > BTC </h2>
                <table style= "width: 100%;">
                
                    <tr>
                        <th>Child Address</th>
                        <th>User </th>
                        <th>Balance </th>
                        <th> Action </th>
                    </tr>
                    <tr>
                        <td>... </td>
                        <td>... </td>
                        <td>... </td>
                        <td> <div class="dropdown">
                            <button class="dropbtn">Action
                                <div class="dropdown-content">
                                    <a href="#">Link 1</a>
                                    <a href="#">Link 2</a>
                                    <a href="#">Link 3</a>
                                </div>
                                
                            </button>
                        </div></td>
                        
                    </tr>
                </table>
                        
        </div>
    </div>
    

</div>
