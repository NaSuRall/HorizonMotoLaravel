<style>
    nav{
        display: flex;
        justify-content: space-between;
        flex-direction: column;
        height: 100%;
    }

    .nav-header{
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;

        & img{
            width: 90%;
        }
    }
    .nav-body{
        display: flex;
        align-items: start;
        justify-content: center;
        flex-direction: column;
        padding: 20px;

        & ul {
            display: flex;
            flex-direction: column;
            width: 100%;
            gap:10px;
        }
        & ul li{
            display: flex;
            align-items: center;
            list-style: none;
            width: 100%;
            padding: 10px 20px;
            gap: 15px;
            transition: 0.3s all ease-in-out;
            &:hover{
                background-color: rgba(255, 255, 255, 0.18);
                color: black;
            }
        }
        & i{
            color: var(--color-i);
        }
        & h2{
            font-size: 0.9em;
            color: var(--color-text-primary);
            padding-bottom: 10px;
        }

        & ul li a{
            color: var(--color-text-primary);
            text-decoration: none;
            width: 100%;
        }

        .dropdown-toggle {
            cursor: pointer;
            color: var(--color-text-primary);
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .dropdown-menu li {
            padding: 8px 0;
        }
    }
</style>
<nav>
    <div>
        <div class="nav-header">
            <img src="{{ asset('img/logo.png') }}" alt="">
        </div>
        <div class="nav-body">
            <h2>Menu</h2>
            <ul>
                <li><i class="fa-solid fa-house"></i><a href="">Dashboard</a><i class="fa-solid fa-chevron-down"></i></li>
                <li><i class="fa-solid fa-cart-shopping"></i><a href="">Product</a></li>
                <li><i class="fa-solid fa-handshake"></i><a href="">Marques</a><i class="fa-solid fa-chevron-down"></i></li>
                <li><i class="fa-solid fa-comment"></i><a href="">Contact</a><i class="fa-solid fa-chevron-down"></i></li>
                <li><i class="fa-solid fa-circle-user"></i><a href="">Profile</a><i class="fa-solid fa-chevron-down"></i></li>
            </ul>
        </div>
    </div>
    <div class="nav-footer">
        <ul>
            <li>Login</li>
            <li>register</li>
        </ul>
    </div>
</nav>


