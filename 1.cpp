#include <bits/stdc++.h>
using namespace std;
#pragma GCC optimize("O3")
#pragma GCC target("sse,sse2,sse3,ssse3,sse4,popcnt,abm,mmx,avx,tune=native")
#pragma GCC optimize("unroll-loops")
#include <ext/pb_ds/assoc_container.hpp>
#include <ext/pb_ds/tree_policy.hpp> 
#define int long long
#define fr(i,a,b) for(int i = a ; i <= b ; ++i)
#define rep(i, a, b) for(int i = a; i < (b); ++i)
#define trav(a, x) for(auto& a : x)
#define all(x) begin(x), end(x)
#define rall(x) (x).rbegin(), (x).rend()
#define sz(x) (int)(x).size()
#define pb push_back
#define fst first
#define snd second
using namespace __gnu_pbds;
using ordered_set = tree<int, null_type,less<int>, rb_tree_tag,tree_order_statistics_node_update>;  
template<typename T> T gcd(T a, T b){return(b?__gcd(a,b):a);}
template<typename T> T lcm(T a, T b){return(a*(b/gcd(a,b)));}
typedef long long ll;typedef pair<int, int> pii;typedef vector<int> vi;typedef long double ld;
template<class T> ostream& operator<<(ostream &os, vector<T> V) {os << "[ "; for(auto v : V) os << v << " "; return os << "]";}
template<class T> ostream& operator<<(ostream &os, set<T> S){os << "{ "; for(auto s:S) os<<s<<" "; return os<<"}";}
template<class L, class R> ostream& operator<<(ostream &os, pair<L,R> P) {return os << "(" << P.first << "," << P.second << ")";}
template<class L, class R> ostream& operator<<(ostream &os, map<L,R> M) {os << "{ "; for(auto m:M) os<<"("<<m.first<<":"<<m.second<<") "; return os<<"}";}
   
#ifdef np
#define trace(...) cout<<"Line:"<<__LINE__<<" "; __f(#__VA_ARGS__, __VA_ARGS__)
template<typename Arg1>void __f(const char *name, Arg1 &&arg1) { cout<<name<<" : "<<arg1<<endl;}
template<typename Arg1, typename ... Args>void __f(const char *names, Arg1 &&arg1, Args &&... args) {
    const char *comma=strchr(names+1,','); cout.write(names,comma-names)<<" : "<<arg1<<" | ";
    __f(comma+1,args...);
}
#else
#define trace(...)
#define endl '\n'
#endif

#define MOD 1000000007  
inline int add(int x, int y){ x += y; if(x >= MOD) x -= MOD; return x;}
inline int sub(int x, int y){ x -= y; if(x < 0) x += MOD; return x;}
inline int mul(int x, int y){ return (((ll) x) * y) % MOD;}
inline ll powr(ll a , ll b){
	ll t =1 ;
	while(b){
		if(b&1) t=mul(t,a);	
		a=mul(a,a);
		b>>=1;
	}
	return t%MOD;
}
inline ll inv(ll a){ return powr(a,MOD-2); }



const int N = 2e5+5;
pair<int,pii> p[N];

void solve(){
	int n , k ; cin >> n >> k ;
	fr(i,0,n-1){
		cin >> p[i].snd.fst;
	}
	fr(i,0,n-1){
		cin >> p[i].snd.snd;
	}
	fr(i,0,n-1){
		p[i].fst = p[i].snd.fst - p[i].snd.snd;
	}
	sort(p,p+n);
	int khareed = 0;
	fr(i,0,k-1) {
		trace(p[i].snd.fst);
		khareed += p[i].snd.fst; 
	}trace(khareed);
	fr(i,k,n-1) khareed += min(p[i].snd.fst,p[i].snd.snd);
	cout << khareed << endl;
}


signed main() {
    cin.sync_with_stdio(0); cin.tie(0);
    cin.exceptions(cin.failbit);
	

	int tt =1 ;
	// cin >> tt;
	rep(i,0,tt) solve();






#ifdef np
    cerr <<endl<<endl<< "Time elapsed: " << 1.0 * clock() / CLOCKS_PER_SEC << " s.\n";
#endif  
 return 0; 
 }
